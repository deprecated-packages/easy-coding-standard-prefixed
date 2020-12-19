<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c\PHPStan\PhpDocParser\Parser;

use _PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast;
use _PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer;
class ConstExprParser
{
    public function parse(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Parser\TokenIterator $tokens, bool $trimStrings = \false) : \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
    {
        if ($tokens->isCurrentTokenType(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_FLOAT)) {
            $value = $tokens->currentTokenValue();
            $tokens->next();
            return new \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprFloatNode($value);
        } elseif ($tokens->isCurrentTokenType(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_INTEGER)) {
            $value = $tokens->currentTokenValue();
            $tokens->next();
            return new \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprIntegerNode($value);
        } elseif ($tokens->isCurrentTokenType(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_SINGLE_QUOTED_STRING)) {
            $value = $tokens->currentTokenValue();
            if ($trimStrings) {
                $value = \trim($tokens->currentTokenValue(), "'");
            }
            $tokens->next();
            return new \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprStringNode($value);
        } elseif ($tokens->isCurrentTokenType(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_DOUBLE_QUOTED_STRING)) {
            $value = $tokens->currentTokenValue();
            if ($trimStrings) {
                $value = \trim($tokens->currentTokenValue(), '"');
            }
            $tokens->next();
            return new \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprStringNode($value);
        } elseif ($tokens->isCurrentTokenType(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_IDENTIFIER)) {
            $identifier = $tokens->currentTokenValue();
            $tokens->next();
            switch (\strtolower($identifier)) {
                case 'true':
                    return new \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprTrueNode();
                case 'false':
                    return new \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprFalseNode();
                case 'null':
                    return new \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNullNode();
                case 'array':
                    $tokens->consumeTokenType(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_PARENTHESES);
                    return $this->parseArray($tokens, \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_CLOSE_PARENTHESES);
            }
            if ($tokens->tryConsumeTokenType(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_DOUBLE_COLON)) {
                $classConstantName = '';
                if ($tokens->currentTokenType() === \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_IDENTIFIER) {
                    $classConstantName .= $tokens->currentTokenValue();
                    $tokens->consumeTokenType(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_IDENTIFIER);
                    if ($tokens->tryConsumeTokenValue('*')) {
                        $classConstantName .= '*';
                    }
                } else {
                    $tokens->consumeTokenValue('*');
                    $classConstantName .= '*';
                }
                return new \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstFetchNode($identifier, $classConstantName);
            }
            return new \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstFetchNode('', $identifier);
        } elseif ($tokens->tryConsumeTokenType(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_OPEN_SQUARE_BRACKET)) {
            return $this->parseArray($tokens, \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_CLOSE_SQUARE_BRACKET);
        }
        throw new \LogicException($tokens->currentTokenValue());
    }
    private function parseArray(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Parser\TokenIterator $tokens, int $endToken) : \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprArrayNode
    {
        $items = [];
        if (!$tokens->tryConsumeTokenType($endToken)) {
            do {
                $items[] = $this->parseArrayItem($tokens);
            } while ($tokens->tryConsumeTokenType(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_COMMA) && !$tokens->isCurrentTokenType($endToken));
            $tokens->consumeTokenType($endToken);
        }
        return new \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprArrayNode($items);
    }
    private function parseArrayItem(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Parser\TokenIterator $tokens) : \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprArrayItemNode
    {
        $expr = $this->parse($tokens);
        if ($tokens->tryConsumeTokenType(\_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Lexer\Lexer::TOKEN_DOUBLE_ARROW)) {
            $key = $expr;
            $value = $this->parse($tokens);
        } else {
            $key = null;
            $value = $expr;
        }
        return new \_PhpScopera8f555a7493c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprArrayItemNode($key, $value);
    }
}
