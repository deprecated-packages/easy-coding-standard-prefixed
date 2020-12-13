<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802\PhpParser\Lexer\TokenEmulator;

use _PhpScoperd3d57724c802\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperd3d57724c802\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperd3d57724c802\PhpParser\Lexer\Emulative::PHP_7_4;
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
