<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Compiler;

use _PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument;
/**
 * Resolves all TaggedIteratorArgument arguments.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class ResolveTaggedIteratorArgumentPass extends \_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Compiler\AbstractRecursivePass
{
    use PriorityTaggedServiceTrait;
    /**
     * {@inheritdoc}
     */
    protected function processValue($value, $isRoot = \false)
    {
        if (!$value instanceof \_PhpScopercb576ca159b5\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument) {
            return parent::processValue($value, $isRoot);
        }
        $value->setValues($this->findAndSortTaggedServices($value, $this->container));
        return $value;
    }
}
