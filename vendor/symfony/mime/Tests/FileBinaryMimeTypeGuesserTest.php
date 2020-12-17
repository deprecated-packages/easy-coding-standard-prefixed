<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfa7254c25e18\Symfony\Component\Mime\Tests;

use _PhpScoperfa7254c25e18\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperfa7254c25e18\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperfa7254c25e18\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperfa7254c25e18\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperfa7254c25e18\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
