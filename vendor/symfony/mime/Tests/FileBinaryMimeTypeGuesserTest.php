<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper2a48669dad72\Symfony\Component\Mime\Tests;

use _PhpScoper2a48669dad72\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoper2a48669dad72\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoper2a48669dad72\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoper2a48669dad72\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoper2a48669dad72\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
