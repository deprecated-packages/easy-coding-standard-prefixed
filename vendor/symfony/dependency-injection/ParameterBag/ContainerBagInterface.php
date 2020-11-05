<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\ParameterBag;

use _PhpScoperdebd9d705540\Psr\Container\ContainerInterface;
use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
/**
 * ContainerBagInterface is the interface implemented by objects that manage service container parameters.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface ContainerBagInterface extends \_PhpScoperdebd9d705540\Psr\Container\ContainerInterface
{
    /**
     * Gets the service container parameters.
     *
     * @return array An array of parameters
     */
    public function all();
    /**
     * Replaces parameter placeholders (%name%) by their values.
     *
     * @param mixed $value A value
     *
     * @throws ParameterNotFoundException if a placeholder references a parameter that does not exist
     */
    public function resolveValue($value);
    /**
     * Escape parameter placeholders %.
     *
     * @param mixed $value
     *
     * @return mixed
     */
    public function escapeValue($value);
    /**
     * Unescape parameter placeholders %.
     *
     * @param mixed $value
     *
     * @return mixed
     */
    public function unescapeValue($value);
}
