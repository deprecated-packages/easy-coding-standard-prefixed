<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b\PhpParser\Lexer\TokenEmulator;

use _PhpScoperdaf95aff095b\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperdaf95aff095b\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperdaf95aff095b\PhpParser\Lexer\Emulative::PHP_7_4;
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
