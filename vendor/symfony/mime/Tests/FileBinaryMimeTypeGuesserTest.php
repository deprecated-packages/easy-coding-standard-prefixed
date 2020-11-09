<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere015d8a3273c\Symfony\Component\Mime\Tests;

use _PhpScopere015d8a3273c\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScopere015d8a3273c\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScopere015d8a3273c\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScopere015d8a3273c\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScopere015d8a3273c\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
