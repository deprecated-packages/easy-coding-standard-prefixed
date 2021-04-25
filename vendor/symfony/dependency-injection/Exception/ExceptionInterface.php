<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperff1e514762b4\Symfony\Component\DependencyInjection\Exception;

use _PhpScoperff1e514762b4\Psr\Container\ContainerExceptionInterface;
/**
 * Base ExceptionInterface for Dependency Injection component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <bulat@theopenskyproject.com>
 */
interface ExceptionInterface extends ContainerExceptionInterface, \Throwable
{
}
