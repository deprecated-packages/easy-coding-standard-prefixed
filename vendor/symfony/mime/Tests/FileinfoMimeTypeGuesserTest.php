<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperecb978830f1e\Symfony\Component\Mime\Tests;

use _PhpScoperecb978830f1e\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperecb978830f1e\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperecb978830f1e\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperecb978830f1e\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperecb978830f1e\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
