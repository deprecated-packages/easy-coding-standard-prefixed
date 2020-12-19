<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfb2c402b972b\Symfony\Component\Mime\Tests;

use _PhpScoperfb2c402b972b\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperfb2c402b972b\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperfb2c402b972b\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperfb2c402b972b\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperfb2c402b972b\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
