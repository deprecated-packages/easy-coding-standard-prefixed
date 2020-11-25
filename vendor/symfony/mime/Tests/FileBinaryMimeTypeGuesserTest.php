<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaac5f7c652e4\Symfony\Component\Mime\Tests;

use _PhpScoperaac5f7c652e4\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperaac5f7c652e4\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperaac5f7c652e4\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperaac5f7c652e4\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperaac5f7c652e4\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
