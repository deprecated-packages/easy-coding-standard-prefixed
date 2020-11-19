<?php

declare (strict_types=1);
namespace _PhpScoper63567e560066\PhpParser\Lexer\TokenEmulator;

use _PhpScoper63567e560066\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoper63567e560066\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper63567e560066\PhpParser\Lexer\Emulative::PHP_8_0;
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
