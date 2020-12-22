<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper57272265e1c9\Symfony\Component\Mime\Tests;

use _PhpScoper57272265e1c9\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoper57272265e1c9\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoper57272265e1c9\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoper57272265e1c9\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoper57272265e1c9\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
