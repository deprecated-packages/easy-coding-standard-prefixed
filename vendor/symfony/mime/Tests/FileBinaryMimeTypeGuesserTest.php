<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdaf95aff095b\Symfony\Component\Mime\Tests;

use _PhpScoperdaf95aff095b\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperdaf95aff095b\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperdaf95aff095b\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperdaf95aff095b\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperdaf95aff095b\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
