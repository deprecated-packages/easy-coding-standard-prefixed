<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercb217fd4e736\Symfony\Component\HttpKernel\DataCollector;

use _PhpScopercb217fd4e736\Symfony\Component\HttpFoundation\Request;
use _PhpScopercb217fd4e736\Symfony\Component\HttpFoundation\Response;
/**
 * AjaxDataCollector.
 *
 * @author Bart van den Burg <bart@burgov.nl>
 *
 * @final since Symfony 4.4
 */
class AjaxDataCollector extends \_PhpScopercb217fd4e736\Symfony\Component\HttpKernel\DataCollector\DataCollector
{
    /**
     * {@inheritdoc}
     *
     * @param \Throwable|null $exception
     */
    public function collect(\_PhpScopercb217fd4e736\Symfony\Component\HttpFoundation\Request $request, \_PhpScopercb217fd4e736\Symfony\Component\HttpFoundation\Response $response)
    {
        // all collecting is done client side
    }
    public function reset()
    {
        // all collecting is done client side
    }
    public function getName()
    {
        return 'ajax';
    }
}
