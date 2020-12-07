<?php

declare (strict_types=1);
namespace _PhpScopereb8678af2407\PhpParser\Lexer\TokenEmulator;

use _PhpScopereb8678af2407\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScopereb8678af2407\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScopereb8678af2407\PhpParser\Lexer\Emulative::PHP_7_4;
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
