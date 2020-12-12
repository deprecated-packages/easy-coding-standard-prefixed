<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperef870243cfdb\Symfony\Component\Mime\Tests;

use _PhpScoperef870243cfdb\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperef870243cfdb\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperef870243cfdb\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperef870243cfdb\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperef870243cfdb\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
