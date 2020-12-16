<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc75fd40d7a6e\PhpParser\Lexer\Emulative;
final class MatchTokenEmulator extends \_PhpScoperc75fd40d7a6e\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc75fd40d7a6e\PhpParser\Lexer\Emulative::PHP_8_0;
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
