<?php

declare (strict_types=1);
namespace _PhpScoper326af2119eba\PhpParser\Lexer\TokenEmulator;

use _PhpScoper326af2119eba\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoper326af2119eba\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoper326af2119eba\PhpParser\Lexer\Emulative::PHP_7_4;
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
