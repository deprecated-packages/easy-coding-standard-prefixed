<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd51690aa3091\Symfony\Component\DependencyInjection\Exception;

use _PhpScoperd51690aa3091\Psr\Container\ContainerExceptionInterface;
/**
 * Base ExceptionInterface for Dependency Injection component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <bulat@theopenskyproject.com>
 */
interface ExceptionInterface extends ContainerExceptionInterface, \Throwable
{
}
