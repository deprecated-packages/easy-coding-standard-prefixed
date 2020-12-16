<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc75fd40d7a6e\Symfony\Component\Mime\Tests;

use _PhpScoperc75fd40d7a6e\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperc75fd40d7a6e\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperc75fd40d7a6e\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperc75fd40d7a6e\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperc75fd40d7a6e\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
