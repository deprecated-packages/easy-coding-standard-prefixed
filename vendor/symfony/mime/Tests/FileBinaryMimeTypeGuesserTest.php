<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper3fa05b4669af\Symfony\Component\Mime\Tests;

use _PhpScoper3fa05b4669af\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoper3fa05b4669af\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoper3fa05b4669af\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoper3fa05b4669af\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoper3fa05b4669af\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
