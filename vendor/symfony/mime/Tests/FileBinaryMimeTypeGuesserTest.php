<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd8b12759ee0d\Symfony\Component\Mime\Tests;

use _PhpScoperd8b12759ee0d\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperd8b12759ee0d\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperd8b12759ee0d\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperd8b12759ee0d\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperd8b12759ee0d\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
