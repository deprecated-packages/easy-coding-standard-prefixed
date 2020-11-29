<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercae980ebf12d\Symfony\Component\Mime\Tests;

use _PhpScopercae980ebf12d\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScopercae980ebf12d\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScopercae980ebf12d\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScopercae980ebf12d\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScopercae980ebf12d\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
