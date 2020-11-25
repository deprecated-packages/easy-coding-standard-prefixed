<?php

declare (strict_types=1);
namespace _PhpScoper2f75f00bf6fa\PhpParser\Lexer\TokenEmulator;

/** @internal */
abstract class TokenEmulator
{
    public abstract function getPhpVersion() : string;
    public abstract function isEmulationNeeded(string $code) : bool;
    /**
     * @return array Modified Tokens
     */
    public abstract function emulate(string $code, array $tokens) : array;
    /**
     * @return array Modified Tokens
     */
    public abstract function reverseEmulate(string $code, array $tokens) : array;
    public function preprocessCode(string $code, array &$patches) : string
    {
        return $code;
    }
}
