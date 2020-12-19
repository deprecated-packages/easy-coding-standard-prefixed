<?php

declare (strict_types=1);
namespace _PhpScoper269dc521b0fa\PhpParser\Lexer\TokenEmulator;

use _PhpScoper269dc521b0fa\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper269dc521b0fa\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper269dc521b0fa\PhpParser\Lexer\Emulative::PHP_8_0;
    }
    public function getKeywordString() : string
    {
        return 'match';
    }
    public function getKeywordToken() : int
    {
        return \T_MATCH;
    }
}
