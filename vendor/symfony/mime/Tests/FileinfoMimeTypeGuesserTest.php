<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperac4e86be08e5\Symfony\Component\Mime\Tests;

use _PhpScoperac4e86be08e5\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperac4e86be08e5\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperac4e86be08e5\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperac4e86be08e5\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperac4e86be08e5\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
