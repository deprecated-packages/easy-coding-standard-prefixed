<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperca8ca183ac38\Symfony\Component\Config\Definition\Builder;

use _PhpScoperca8ca183ac38\Symfony\Component\Config\Definition\BooleanNode;
use _PhpScoperca8ca183ac38\Symfony\Component\Config\Definition\Exception\InvalidDefinitionException;
/**
 * This class provides a fluent interface for defining a node.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class BooleanNodeDefinition extends \_PhpScoperca8ca183ac38\Symfony\Component\Config\Definition\Builder\ScalarNodeDefinition
{
    /**
     * {@inheritdoc}
     */
    public function __construct(?string $name, \_PhpScoperca8ca183ac38\Symfony\Component\Config\Definition\Builder\NodeParentInterface $parent = null)
    {
        parent::__construct($name, $parent);
        $this->nullEquivalent = \true;
    }
    /**
     * Instantiate a Node.
     *
     * @return BooleanNode The node
     */
    protected function instantiateNode()
    {
        return new \_PhpScoperca8ca183ac38\Symfony\Component\Config\Definition\BooleanNode($this->name, $this->parent, $this->pathSeparator);
    }
    /**
     * {@inheritdoc}
     *
     * @throws InvalidDefinitionException
     */
    public function cannotBeEmpty()
    {
        throw new \_PhpScoperca8ca183ac38\Symfony\Component\Config\Definition\Exception\InvalidDefinitionException('->cannotBeEmpty() is not applicable to BooleanNodeDefinition.');
    }
}
