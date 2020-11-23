<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4b135661b3a\Symfony\Component\Mime\Tests;

use _PhpScoperc4b135661b3a\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperc4b135661b3a\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperc4b135661b3a\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperc4b135661b3a\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperc4b135661b3a\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
