<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdeea1786e972\Symfony\Component\Mime\Tests;

use _PhpScoperdeea1786e972\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperdeea1786e972\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperdeea1786e972\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperdeea1786e972\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperdeea1786e972\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
