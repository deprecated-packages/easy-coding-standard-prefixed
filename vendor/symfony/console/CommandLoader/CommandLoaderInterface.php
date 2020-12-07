<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb73f9e44f4eb\Symfony\Component\Console\CommandLoader;

use _PhpScoperb73f9e44f4eb\Symfony\Component\Console\Command\Command;
use _PhpScoperb73f9e44f4eb\Symfony\Component\Console\Exception\CommandNotFoundException;
/**
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
interface CommandLoaderInterface
{
    /**
     * Loads a command.
     *
     * @param string $name
     *
     * @return Command
     *
     * @throws CommandNotFoundException
     */
    public function get($name);
    /**
     * Checks if a command exists.
     *
     * @param string $name
     *
     * @return bool
     */
    public function has($name);
    /**
     * @return string[] All registered command names
     */
    public function getNames();
}
