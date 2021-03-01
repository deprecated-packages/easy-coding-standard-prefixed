<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4ea0f0bd23f\Symfony\Component\String\Slugger;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\String\AbstractUnicodeString;
/**
 * Creates a URL-friendly slug from a given string.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
interface SluggerInterface
{
    /**
     * Creates a slug for the given string and locale, using appropriate transliteration when needed.
     */
    public function slug(string $string, string $separator = '-', string $locale = null) : \_PhpScoperc4ea0f0bd23f\Symfony\Component\String\AbstractUnicodeString;
}
