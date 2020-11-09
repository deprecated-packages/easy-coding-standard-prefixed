<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Set;

use _PhpScoperf5f75c22067b\Nette\Utils\Strings;
use ReflectionClass;
use Symplify\SetConfigResolver\ValueObject\Set;
use Symplify\SmartFileSystem\SmartFileInfo;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
final class ConstantReflectionSetFactory
{
    /**
     * @see https://regex101.com/r/mkleqU/1
     * @var string
     */
    private const REMOVE_DASH_BEFORE_NUMBER_REGEX = '#([a-z])-(\\d+)$$#';
    /**
     * @var string
     */
    private const UNDERSCORE_REGEX = '#_#';
    /**
     * @return Set[]
     */
    public function createSetsFromClass(string $setClassName) : array
    {
        $setListReflectionClass = new \ReflectionClass($setClassName);
        $sets = [];
        // new kind of paths sets
        $constants = $setListReflectionClass->getConstants();
        foreach ($constants as $name => $setPath) {
            if (!\file_exists($setPath)) {
                $message = \sprintf('Set file "%s" not found. Check %s::%s', $setPath, $setClassName, $name);
                throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException($message);
            }
            $setName = $this->constantToDashes($name);
            // back compatible names without "-"
            $setName = \_PhpScoperf5f75c22067b\Nette\Utils\Strings::replace($setName, self::REMOVE_DASH_BEFORE_NUMBER_REGEX, '$1$2');
            $sets[] = new \Symplify\SetConfigResolver\ValueObject\Set($setName, new \Symplify\SmartFileSystem\SmartFileInfo($setPath));
        }
        return $sets;
    }
    private function constantToDashes(string $string) : string
    {
        $string = \strtolower($string);
        return \_PhpScoperf5f75c22067b\Nette\Utils\Strings::replace($string, self::UNDERSCORE_REGEX, '-');
    }
}
