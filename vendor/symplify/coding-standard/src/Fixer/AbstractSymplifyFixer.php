<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Fixer;

use PhpCsFixer\Fixer\DefinedFixerInterface;
use PhpCsFixer\Fixer\FixerInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use ReflectionClass;
use SplFileInfo;
abstract class AbstractSymplifyFixer implements \PhpCsFixer\Fixer\DefinedFixerInterface
{
    public function getPriority() : int
    {
        return 0;
    }
    public function getName() : string
    {
        return self::class;
    }
    public function isRisky() : bool
    {
        return \false;
    }
    public function supports(\SplFileInfo $file) : bool
    {
        return \true;
    }
    /**
     * @return Token[]
     */
    protected function reverseTokens(\PhpCsFixer\Tokenizer\Tokens $tokens) : array
    {
        return \array_reverse($tokens->toArray(), \true);
    }
    /**
     * Helper method to run this before specified fixer,
     * works even in case of change.
     */
    protected function getPriorityBefore(string $fixerClass) : int
    {
        if (!\is_a($fixerClass, \PhpCsFixer\Fixer\FixerInterface::class, \true)) {
            return 0;
        }
        $reflectionClass = new \ReflectionClass($fixerClass);
        /** @var FixerInterface $fixer */
        $fixer = $reflectionClass->newInstanceWithoutConstructor();
        return $fixer->getPriority() + 5;
    }
}
