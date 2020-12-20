<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser;

use _PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast;
use _PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer;
class TypeParser
{
    /** @var ConstExprParser|null */
    private $constExprParser;
    public function __construct(?\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\ConstExprParser $constExprParser = null)
    {
        $this->constExprParser = $constExprParser;
    }
    public function parse(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_NULLABLE)) {
            $type = $this->parseNullable($tokens);
        } else {
            $type = $this->parseAtomic($tokens);
            if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_UNION)) {
                $type = $this->parseUnion($tokens, $type);
            } elseif ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_INTERSECTION)) {
                $type = $this->parseIntersection($tokens, $type);
            }
        }
        return $type;
    }
    private function parseAtomic(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        if ($tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_PARENTHESES)) {
            $type = $this->parse($tokens);
            $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_CLOSE_PARENTHESES);
            if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_SQUARE_BRACKET)) {
                return $this->tryParseArray($tokens, $type);
            }
            return $type;
        } elseif ($tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_THIS_VARIABLE)) {
            $type = new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\ThisTypeNode();
            if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_SQUARE_BRACKET)) {
                return $this->tryParseArray($tokens, $type);
            }
            return $type;
        }
        $currentTokenValue = $tokens->currentTokenValue();
        $tokens->pushSavePoint();
        // because of ConstFetchNode
        if ($tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_IDENTIFIER)) {
            $type = new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode($currentTokenValue);
            if (!$tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_DOUBLE_COLON)) {
                $tokens->dropSavePoint();
                // because of ConstFetchNode
                if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_ANGLE_BRACKET)) {
                    $type = $this->parseGeneric($tokens, $type);
                    if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_SQUARE_BRACKET)) {
                        $type = $this->tryParseArray($tokens, $type);
                    }
                } elseif ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_PARENTHESES)) {
                    $type = $this->tryParseCallable($tokens, $type);
                } elseif ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_SQUARE_BRACKET)) {
                    $type = $this->tryParseArray($tokens, $type);
                } elseif ($type->name === 'array' && $tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_CURLY_BRACKET) && !$tokens->isPrecededByHorizontalWhitespace()) {
                    $type = $this->parseArrayShape($tokens, $type);
                    if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_SQUARE_BRACKET)) {
                        $type = $this->tryParseArray($tokens, $type);
                    }
                }
                return $type;
            } else {
                $tokens->rollback();
                // because of ConstFetchNode
            }
        } else {
            $tokens->dropSavePoint();
            // because of ConstFetchNode
        }
        $exception = new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\ParserException($tokens->currentTokenValue(), $tokens->currentTokenType(), $tokens->currentTokenOffset(), \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_IDENTIFIER);
        if ($this->constExprParser === null) {
            throw $exception;
        }
        try {
            $constExpr = $this->constExprParser->parse($tokens, \true);
            if ($constExpr instanceof \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprArrayNode) {
                throw $exception;
            }
            return new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\ConstTypeNode($constExpr);
        } catch (\LogicException $e) {
            throw $exception;
        }
    }
    private function parseUnion(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens, \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode $type) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        $types = [$type];
        while ($tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_UNION)) {
            $types[] = $this->parseAtomic($tokens);
        }
        return new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode($types);
    }
    private function parseIntersection(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens, \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode $type) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        $types = [$type];
        while ($tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_INTERSECTION)) {
            $types[] = $this->parseAtomic($tokens);
        }
        return new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode($types);
    }
    private function parseNullable(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_NULLABLE);
        $type = new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode($tokens->currentTokenValue());
        $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_IDENTIFIER);
        if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_ANGLE_BRACKET)) {
            $type = $this->parseGeneric($tokens, $type);
        } elseif ($type->name === 'array' && $tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_CURLY_BRACKET) && !$tokens->isPrecededByHorizontalWhitespace()) {
            $type = $this->parseArrayShape($tokens, $type);
        }
        if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_SQUARE_BRACKET)) {
            $type = $this->tryParseArray($tokens, $type);
        }
        return new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode($type);
    }
    public function parseGeneric(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens, \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode $baseType) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode
    {
        $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_ANGLE_BRACKET);
        $genericTypes = [$this->parse($tokens)];
        while ($tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_COMMA)) {
            $genericTypes[] = $this->parse($tokens);
        }
        $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_CLOSE_ANGLE_BRACKET);
        return new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode($baseType, $genericTypes);
    }
    private function parseCallable(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens, \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode $identifier) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_PARENTHESES);
        $parameters = [];
        if (!$tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_CLOSE_PARENTHESES)) {
            $parameters[] = $this->parseCallableParameter($tokens);
            while ($tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_COMMA)) {
                $parameters[] = $this->parseCallableParameter($tokens);
            }
        }
        $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_CLOSE_PARENTHESES);
        $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_COLON);
        $returnType = $this->parseCallableReturnType($tokens);
        return new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode($identifier, $parameters, $returnType);
    }
    private function parseCallableParameter(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\CallableTypeParameterNode
    {
        $type = $this->parse($tokens);
        $isReference = $tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_REFERENCE);
        $isVariadic = $tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_VARIADIC);
        if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_VARIABLE)) {
            $parameterName = $tokens->currentTokenValue();
            $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_VARIABLE);
        } else {
            $parameterName = '';
        }
        $isOptional = $tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_EQUAL);
        return new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\CallableTypeParameterNode($type, $isReference, $isVariadic, $parameterName, $isOptional);
    }
    private function parseCallableReturnType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_NULLABLE)) {
            $type = $this->parseNullable($tokens);
        } elseif ($tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_PARENTHESES)) {
            $type = $this->parse($tokens);
            $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_CLOSE_PARENTHESES);
        } else {
            $type = new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode($tokens->currentTokenValue());
            $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_IDENTIFIER);
            if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_ANGLE_BRACKET)) {
                $type = $this->parseGeneric($tokens, $type);
            } elseif ($type->name === 'array' && $tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_CURLY_BRACKET) && !$tokens->isPrecededByHorizontalWhitespace()) {
                $type = $this->parseArrayShape($tokens, $type);
            }
        }
        if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_SQUARE_BRACKET)) {
            $type = $this->tryParseArray($tokens, $type);
        }
        return $type;
    }
    private function tryParseCallable(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens, \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode $identifier) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        try {
            $tokens->pushSavePoint();
            $type = $this->parseCallable($tokens, $identifier);
            $tokens->dropSavePoint();
        } catch (\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\ParserException $e) {
            $tokens->rollback();
            $type = $identifier;
        }
        return $type;
    }
    private function tryParseArray(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens, \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode $type) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        try {
            while ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_SQUARE_BRACKET)) {
                $tokens->pushSavePoint();
                $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_SQUARE_BRACKET);
                $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_CLOSE_SQUARE_BRACKET);
                $tokens->dropSavePoint();
                $type = new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode($type);
            }
        } catch (\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\ParserException $e) {
            $tokens->rollback();
        }
        return $type;
    }
    private function parseArrayShape(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens, \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode $type) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode
    {
        $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_CURLY_BRACKET);
        $tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_PHPDOC_EOL);
        $items = [$this->parseArrayShapeItem($tokens)];
        $tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_PHPDOC_EOL);
        while ($tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_COMMA)) {
            $tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_PHPDOC_EOL);
            if ($tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_CLOSE_CURLY_BRACKET)) {
                // trailing comma case
                return new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode($items);
            }
            $items[] = $this->parseArrayShapeItem($tokens);
            $tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_PHPDOC_EOL);
        }
        $tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_PHPDOC_EOL);
        $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_CLOSE_CURLY_BRACKET);
        return new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode($items);
    }
    private function parseArrayShapeItem(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens) : \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\ArrayShapeItemNode
    {
        try {
            $tokens->pushSavePoint();
            $key = $this->parseArrayShapeKey($tokens);
            $optional = $tokens->tryConsumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_NULLABLE);
            $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_COLON);
            $value = $this->parse($tokens);
            $tokens->dropSavePoint();
            return new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\ArrayShapeItemNode($key, $optional, $value);
        } catch (\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\ParserException $e) {
            $tokens->rollback();
            $value = $this->parse($tokens);
            return new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\ArrayShapeItemNode(null, \false, $value);
        }
    }
    /**
     * @return Ast\ConstExpr\ConstExprIntegerNode|Ast\ConstExpr\ConstExprStringNode|Ast\Type\IdentifierTypeNode
     */
    private function parseArrayShapeKey(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Parser\TokenIterator $tokens)
    {
        if ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_INTEGER)) {
            $key = new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprIntegerNode($tokens->currentTokenValue());
            $tokens->next();
        } elseif ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_SINGLE_QUOTED_STRING)) {
            $key = new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprStringNode(\trim($tokens->currentTokenValue(), "'"));
            $tokens->next();
        } elseif ($tokens->isCurrentTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_DOUBLE_QUOTED_STRING)) {
            $key = new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprStringNode(\trim($tokens->currentTokenValue(), '"'));
            $tokens->next();
        } else {
            $key = new \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode($tokens->currentTokenValue());
            $tokens->consumeTokenType(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_IDENTIFIER);
        }
        return $key;
    }
}
