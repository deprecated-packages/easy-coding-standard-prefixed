<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdc8fbcd7c69d\Symfony\Component\Mime\Tests;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperdc8fbcd7c69d\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperdc8fbcd7c69d\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperdc8fbcd7c69d\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
