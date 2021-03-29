<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5e5c2222758f\Symfony\Component\DependencyInjection\ParameterBag;

use _PhpScoper5e5c2222758f\Psr\Container\ContainerInterface;
use _PhpScoper5e5c2222758f\Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
/**
 * ContainerBagInterface is the interface implemented by objects that manage service container parameters.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface ContainerBagInterface extends \_PhpScoper5e5c2222758f\Psr\Container\ContainerInterface
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
