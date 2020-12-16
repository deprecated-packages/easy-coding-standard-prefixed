<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PhpParser\Lexer\TokenEmulator;

use _PhpScoperc75fd40d7a6e\PhpParser\Lexer\Emulative;
final class FnTokenEmulator extends \_PhpScoperc75fd40d7a6e\PhpParser\Lexer\TokenEmulator\KeywordEmulator
{
    public function getPhpVersion() : string
    {
        return \_PhpScoperc75fd40d7a6e\PhpParser\Lexer\Emulative::PHP_7_4;
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
