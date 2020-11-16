<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperedc2e0c967db\Symfony\Component\Mime\Tests;

use _PhpScoperedc2e0c967db\Symfony\Component\Mime\FileBinaryMimeTypeGuesser;
use _PhpScoperedc2e0c967db\Symfony\Component\Mime\MimeTypeGuesserInterface;
class FileBinaryMimeTypeGuesserTest extends \_PhpScoperedc2e0c967db\Symfony\Component\Mime\Tests\AbstractMimeTypeGuesserTest
{
    protected function getGuesser() : \_PhpScoperedc2e0c967db\Symfony\Component\Mime\MimeTypeGuesserInterface
    {
        return new \_PhpScoperedc2e0c967db\Symfony\Component\Mime\FileBinaryMimeTypeGuesser();
    }
}
