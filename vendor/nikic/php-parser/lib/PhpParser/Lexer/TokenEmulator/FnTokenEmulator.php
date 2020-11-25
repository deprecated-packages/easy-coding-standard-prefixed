<?php

declare (strict_types=1);
namespace _PhpScoper418afc2f157c\PhpParser\Lexer\TokenEmulator;

use _PhpScoper418afc2f157c\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper418afc2f157c\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper418afc2f157c\PhpParser\Lexer\Emulative::PHP_7_4;
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
