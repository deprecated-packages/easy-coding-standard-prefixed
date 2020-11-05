<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper6ec31b85adcf\Symfony\Component\EventDispatcher\Debug;

use _PhpScoper6ec31b85adcf\Symfony\Component\EventDispatcher\EventDispatcherInterface;
use _PhpScoper6ec31b85adcf\Symfony\Component\HttpFoundation\Request;
use _PhpScoper6ec31b85adcf\Symfony\Contracts\Service\ResetInterface;
/**
 * @deprecated since Symfony 4.1
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface TraceableEventDispatcherInterface extends \_PhpScoper6ec31b85adcf\Symfony\Component\EventDispatcher\EventDispatcherInterface, \_PhpScoper6ec31b85adcf\Symfony\Contracts\Service\ResetInterface
{
    /**
     * Gets the called listeners.
     *
     * @param Request|null $request The request to get listeners for
     *
     * @return array An array of called listeners
     */
    public function getCalledListeners();
    /**
     * Gets the not called listeners.
     *
     * @param Request|null $request The request to get listeners for
     *
     * @return array An array of not called listeners
     */
    public function getNotCalledListeners();
}
