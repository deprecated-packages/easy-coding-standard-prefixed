<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper3e1e0e5bb8ef\Symfony\Component\Mime\Tests;

use _PhpScoper3e1e0e5bb8ef\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoper3e1e0e5bb8ef\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoper3e1e0e5bb8ef\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoper3e1e0e5bb8ef\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
