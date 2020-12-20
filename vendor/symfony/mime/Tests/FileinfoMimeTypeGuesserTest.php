<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperba24099fc6fd\Symfony\Component\Mime\Tests;

use _PhpScoperba24099fc6fd\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperba24099fc6fd\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperba24099fc6fd\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperba24099fc6fd\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperba24099fc6fd\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
