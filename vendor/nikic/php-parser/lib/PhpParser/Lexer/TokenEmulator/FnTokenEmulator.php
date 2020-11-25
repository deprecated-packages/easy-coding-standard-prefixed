<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38\PhpParser\Lexer\TokenEmulator;

use _PhpScoperca8ca183ac38\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperca8ca183ac38\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperca8ca183ac38\PhpParser\Lexer\Emulative::PHP_7_4;
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
