<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper4cd05b62e9f1\Symfony\Component\HttpKernel\Fragment;

/**
 * Implements the SSI rendering strategy.
 *
 * @author Sebastian Krebs <krebs.seb@gmail.com>
 */
class SsiFragmentRenderer extends \_PhpScoper4cd05b62e9f1\Symfony\Component\HttpKernel\Fragment\AbstractSurrogateFragmentRenderer
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ssi';
    }
}
