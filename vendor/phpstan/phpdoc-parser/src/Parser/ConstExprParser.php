<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Parser;

use _PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast;
use _PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer;
class ConstExprParser
{
    public function parse(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Parser\TokenIterator $tokens, bool $trimStrings = \false) : \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
    {
        if ($tokens->isCurrentTokenType(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_FLOAT)) {
            $value = $tokens->currentTokenValue();
            $tokens->next();
            return new \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprFloatNode($value);
        } elseif ($tokens->isCurrentTokenType(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_INTEGER)) {
            $value = $tokens->currentTokenValue();
            $tokens->next();
            return new \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprIntegerNode($value);
        } elseif ($tokens->isCurrentTokenType(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_SINGLE_QUOTED_STRING)) {
            $value = $tokens->currentTokenValue();
            if ($trimStrings) {
                $value = \trim($tokens->currentTokenValue(), "'");
            }
            $tokens->next();
            return new \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprStringNode($value);
        } elseif ($tokens->isCurrentTokenType(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_DOUBLE_QUOTED_STRING)) {
            $value = $tokens->currentTokenValue();
            if ($trimStrings) {
                $value = \trim($tokens->currentTokenValue(), '"');
            }
            $tokens->next();
            return new \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprStringNode($value);
        } elseif ($tokens->isCurrentTokenType(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_IDENTIFIER)) {
            $identifier = $tokens->currentTokenValue();
            $tokens->next();
            switch (\strtolower($identifier)) {
                case 'true':
                    return new \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprTrueNode();
                case 'false':
                    return new \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprFalseNode();
                case 'null':
                    return new \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNullNode();
                case 'array':
                    $tokens->consumeTokenType(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_PARENTHESES);
                    return $this->parseArray($tokens, \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_CLOSE_PARENTHESES);
            }
            if ($tokens->tryConsumeTokenType(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_DOUBLE_COLON)) {
                $classConstantName = '';
                if ($tokens->currentTokenType() === \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_IDENTIFIER) {
                    $classConstantName .= $tokens->currentTokenValue();
                    $tokens->consumeTokenType(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_IDENTIFIER);
                    if ($tokens->tryConsumeTokenValue('*')) {
                        $classConstantName .= '*';
                    }
                } else {
                    $tokens->consumeTokenValue('*');
                    $classConstantName .= '*';
                }
                return new \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstFetchNode($identifier, $classConstantName);
            }
            return new \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstFetchNode('', $identifier);
        } elseif ($tokens->tryConsumeTokenType(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_SQUARE_BRACKET)) {
            return $this->parseArray($tokens, \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_CLOSE_SQUARE_BRACKET);
        }
        throw new \LogicException($tokens->currentTokenValue());
    }
    private function parseArray(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Parser\TokenIterator $tokens, int $endToken) : \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprArrayNode
    {
        $items = [];
        if (!$tokens->tryConsumeTokenType($endToken)) {
            do {
                $items[] = $this->parseArrayItem($tokens);
            } while ($tokens->tryConsumeTokenType(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_COMMA) && !$tokens->isCurrentTokenType($endToken));
            $tokens->consumeTokenType($endToken);
        }
        return new \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprArrayNode($items);
    }
    private function parseArrayItem(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Parser\TokenIterator $tokens) : \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprArrayItemNode
    {
        $expr = $this->parse($tokens);
        if ($tokens->tryConsumeTokenType(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_DOUBLE_ARROW)) {
            $key = $expr;
            $value = $this->parse($tokens);
        } else {
            $key = null;
            $value = $expr;
        }
        return new \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprArrayItemNode($key, $value);
    }
}
