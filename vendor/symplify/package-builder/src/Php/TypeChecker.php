<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Php;

final class TypeChecker
{
    /**
     * @param string[] $types
     */
    public function isInstanceOf($object, array $types) : bool
    {
        foreach ($types as $type) {
            if (\is_a($object, $type, \true)) {
                return \true;
            }
        }
        return \false;
    }
}
