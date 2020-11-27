<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper578a67c80b2b\Symfony\Component\Mime\Tests;

use _PhpScoper578a67c80b2b\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoper578a67c80b2b\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoper578a67c80b2b\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoper578a67c80b2b\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoper578a67c80b2b\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
