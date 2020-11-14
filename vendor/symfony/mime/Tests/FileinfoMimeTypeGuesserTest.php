<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd4937ee9b515\Symfony\Component\Mime\Tests;

use _PhpScoperd4937ee9b515\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperd4937ee9b515\Symfony\Component\Mime\MimeTypeGuesserInterface;
/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends \_PhpScoperd4937ee9b515\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperd4937ee9b515\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperd4937ee9b515\Symfony\Component\Mime\FileinfoMimeTypeGuesser();
    }
}
