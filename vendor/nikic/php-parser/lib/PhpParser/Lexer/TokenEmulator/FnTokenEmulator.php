<?php

declare (strict_types=1);
namespace _PhpScoperef870243cfdb\PhpParser\Lexer\TokenEmulator;

use _PhpScoperef870243cfdb\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperef870243cfdb\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperef870243cfdb\PhpParser\Lexer\Emulative::PHP_7_4;
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
