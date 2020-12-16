<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection;

/**
 * Parameter represents a parameter reference.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Parameter
{
    private $id;
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The parameter key
     */
    public function __toString()
    {
        return $this->id;
    }
}
