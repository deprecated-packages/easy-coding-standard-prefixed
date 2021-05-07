<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercae9e6ab5cea\Symfony\Component\Console\Helper;

use _PhpScopercae9e6ab5cea\Symfony\Component\Console\Input\InputAwareInterface;
use _PhpScopercae9e6ab5cea\Symfony\Component\Console\Input\InputInterface;
/**
 * An implementation of InputAwareInterface for Helpers.
 *
 * @author Wouter J <waldio.webdesign@gmail.com>
 */
abstract class InputAwareHelper extends \_PhpScopercae9e6ab5cea\Symfony\Component\Console\Helper\Helper implements InputAwareInterface
{
    protected $input;
    /**
     * {@inheritdoc}
     */
    public function setInput(InputInterface $input)
    {
        $this->input = $input;
    }
}
