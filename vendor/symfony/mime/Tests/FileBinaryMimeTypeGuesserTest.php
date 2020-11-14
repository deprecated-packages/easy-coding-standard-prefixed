<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper229e8121cf9f\Symfony\Component\Mime\Tests;

use _PhpScoper229e8121cf9f\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoper229e8121cf9f\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoper229e8121cf9f\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoper229e8121cf9f\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoper229e8121cf9f\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
