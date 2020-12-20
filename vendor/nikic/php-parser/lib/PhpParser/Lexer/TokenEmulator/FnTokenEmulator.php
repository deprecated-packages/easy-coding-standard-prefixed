<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\Lexer\TokenEmulator;

use _PhpScoperba24099fc6fd\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperba24099fc6fd\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperba24099fc6fd\PhpParser\Lexer\Emulative::PHP_7_4;
    }
    public function getKeywordString() : string
    {
        return 'fn';
    }
    public function getKeywordToken() : int
    {
        return \T_FN;
    }
}
