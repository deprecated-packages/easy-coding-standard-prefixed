<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Loader;

/**
 * GlobFileLoader loads files from a glob pattern.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class GlobFileLoader extends \_PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Loader\FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load($resource, $type = null)
    {
        foreach ($this->glob($resource, \false, $globResource) as $path => $info) {
            $this->import($path);
        }
        $this->container->addResource($globResource);
    }
    /**
     * {@inheritdoc}
     */
    public function supports($resource, $type = null)
    {
        return 'glob' === $type;
    }
}
