<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper27cac5a8b4ab\Symfony\Component\HttpKernel\Fragment;

/**
 * Implements the ESI rendering strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EsiFragmentRenderer extends \_PhpScoper27cac5a8b4ab\Symfony\Component\HttpKernel\Fragment\AbstractSurrogateFragmentRenderer
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'esi';
    }
}
