<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Argument;

/**
 * Represents a complex argument containing nested values.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
interface ArgumentInterface
{
    /**
     * @return array
     */
    public function getValues();
    public function setValues(array $values);
}
