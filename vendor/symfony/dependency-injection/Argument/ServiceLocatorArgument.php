<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Argument;

use _PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Reference;
/**
 * Represents a closure acting as a service locator.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ServiceLocatorArgument implements \_PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Argument\ArgumentInterface
{
    use ReferenceSetArgumentTrait;
    private $taggedIteratorArgument;
    /**
     * @param Reference[]|TaggedIteratorArgument $values
     */
    public function __construct($values = [])
    {
        if ($values instanceof \_PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument) {
            $this->taggedIteratorArgument = $values;
            $this->values = [];
        } else {
            $this->setValues($values);
        }
    }
    public function getTaggedIteratorArgument() : ?\_PhpScoperf65af7a6d9a0\Symfony\Component\DependencyInjection\Argument\TaggedIteratorArgument
    {
        return $this->taggedIteratorArgument;
    }
}
