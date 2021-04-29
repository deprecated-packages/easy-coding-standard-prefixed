<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper2dc059b3a969\Symfony\Component\DependencyInjection\Exception;

use _PhpScoper2dc059b3a969\Psr\Container\ContainerExceptionInterface;
/**
 * Base ExceptionInterface for Dependency Injection component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <bulat@theopenskyproject.com>
 */
interface ExceptionInterface extends ContainerExceptionInterface, \Throwable
{
}
