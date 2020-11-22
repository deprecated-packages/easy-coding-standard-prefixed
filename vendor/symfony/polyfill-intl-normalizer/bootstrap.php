<?php

namespace _PhpScoper16399a42e87c;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScoper16399a42e87c\Symfony\Polyfill\Intl\Normalizer as p;
if (!\function_exists('normalizer_is_normalized')) {
    function normalizer_is_normalized($s, $form = \_PhpScoper16399a42e87c\Symfony\Polyfill\Intl\Normalizer\Normalizer::NFC)
    {
        return \_PhpScoper16399a42e87c\Symfony\Polyfill\Intl\Normalizer\Normalizer::isNormalized($s, $form);
    }
    function normalizer_normalize($s, $form = \_PhpScoper16399a42e87c\Symfony\Polyfill\Intl\Normalizer\Normalizer::NFC)
    {
        return \_PhpScoper16399a42e87c\Symfony\Polyfill\Intl\Normalizer\Normalizer::normalize($s, $form);
    }
}
