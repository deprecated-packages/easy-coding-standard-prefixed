<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper59ccd3f8e121\Symfony\Component\Console\Helper;

use _PhpScoper59ccd3f8e121\Symfony\Component\Console\Input\InputAwareInterface;
use _PhpScoper59ccd3f8e121\Symfony\Component\Console\Input\InputInterface;
/**
 * An implementation of InputAwareInterface for Helpers.
 *
 * @author Wouter J <waldio.webdesign@gmail.com>
 */
abstract class InputAwareHelper extends \_PhpScoper59ccd3f8e121\Symfony\Component\Console\Helper\Helper implements \_PhpScoper59ccd3f8e121\Symfony\Component\Console\Input\InputAwareInterface
{
    protected $input;
    /**
     * {@inheritdoc}
     */
    public function setInput(\_PhpScoper59ccd3f8e121\Symfony\Component\Console\Input\InputInterface $input)
    {
        $this->input = $input;
    }
}
