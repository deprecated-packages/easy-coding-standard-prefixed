<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\TokenRunner\Whitespace;

use PhpCsFixer\Tokenizer\Tokens;
use PhpCsFixer\WhitespacesFixerConfig;
use Symplify\CodingStandard\TokenRunner\Analyzer\FixerAnalyzer\IndentDetector;
final class IndentResolver
{
    /**
     * @var IndentDetector
     */
    private $indentDetector;
    /**
     * @var WhitespacesFixerConfig
     */
    private $whitespacesFixerConfig;
    public function __construct(\Symplify\CodingStandard\TokenRunner\Analyzer\FixerAnalyzer\IndentDetector $indentDetector, \PhpCsFixer\WhitespacesFixerConfig $whitespacesFixerConfig)
    {
        $this->indentDetector = $indentDetector;
        $this->whitespacesFixerConfig = $whitespacesFixerConfig;
    }
    public function resolveClosingBracketNewlineWhitespace(\PhpCsFixer\Tokenizer\Tokens $tokens, int $startIndex) : string
    {
        $indentLevel = $this->indentDetector->detectOnPosition($tokens, $startIndex);
        return $this->whitespacesFixerConfig->getLineEnding() . \str_repeat($this->whitespacesFixerConfig->getIndent(), $indentLevel);
    }
    public function resolveNewlineIndentWhitespace(\PhpCsFixer\Tokenizer\Tokens $tokens, int $startIndex) : string
    {
        $indentWhitespace = $this->resolveIndentWhitespace($tokens, $startIndex);
        return $this->whitespacesFixerConfig->getLineEnding() . $indentWhitespace;
    }
    private function resolveIndentWhitespace(\PhpCsFixer\Tokenizer\Tokens $tokens, int $startIndex) : string
    {
        $indentLevel = $this->indentDetector->detectOnPosition($tokens, $startIndex);
        return \str_repeat($this->whitespacesFixerConfig->getIndent(), $indentLevel + 1);
    }
}
