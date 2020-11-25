<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaa402dd1b1f1\Symfony\Component\Mime\Tests;

use _PhpScoperaa402dd1b1f1\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperaa402dd1b1f1\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperaa402dd1b1f1\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperaa402dd1b1f1\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
