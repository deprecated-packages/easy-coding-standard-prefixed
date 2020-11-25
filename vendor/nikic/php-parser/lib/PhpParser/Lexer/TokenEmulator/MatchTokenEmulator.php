<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38\PhpParser\Lexer\TokenEmulator;

use _PhpScoperca8ca183ac38\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperca8ca183ac38\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperca8ca183ac38\PhpParser\Lexer\Emulative::PHP_8_0;
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
