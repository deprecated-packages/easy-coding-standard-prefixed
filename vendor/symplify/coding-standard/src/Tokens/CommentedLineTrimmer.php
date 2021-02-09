<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Tokens;

use _PhpScoper807f8e74693b\Nette\Utils\Strings;
/**
 * Heavily inspired by
 * @see https://github.com/squizlabs/PHP_CodeSniffer/blob/master/src/Standards/Squiz/Sniffs/PHP/CommentedOutCodeSniff.php
 */
final class CommentedLineTrimmer
{
    /**
     * @var string[]
     */
    private const OPENING_LINE = ['//', '#'];
    public function trim(string $tokenContent) : string
    {
        foreach (self::OPENING_LINE as $openingLine) {
            if (!\_PhpScoper807f8e74693b\Nette\Utils\Strings::startsWith($tokenContent, $openingLine)) {
                continue;
            }
            return \substr($tokenContent, \strlen($openingLine));
        }
        return $tokenContent;
    }
}
