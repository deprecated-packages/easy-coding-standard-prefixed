<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd3d57724c802\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperd3d57724c802\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd3d57724c802\PhpParser\Lexer\Emulative::PHP_8_0;
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
