<?php

namespace _PhpScoperf361a7d70552;

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use _PhpScoperf361a7d70552\Symfony\Polyfill\Intl\Normalizer as p;
if (!\function_exists('normalizer_is_normalized')) {
    function normalizer_is_normalized(string $string, int $form = \_PhpScoperf361a7d70552\Symfony\Polyfill\Intl\Normalizer\Normalizer::FORM_C) : bool
    {
        return \_PhpScoperf361a7d70552\Symfony\Polyfill\Intl\Normalizer\Normalizer::isNormalized($string, $form);
    }
}
if (!\function_exists('normalizer_normalize')) {
    function normalizer_normalize(string $string, int $form = \_PhpScoperf361a7d70552\Symfony\Polyfill\Intl\Normalizer\Normalizer::FORM_C) : string|false
    {
        return \_PhpScoperf361a7d70552\Symfony\Polyfill\Intl\Normalizer\Normalizer::normalize($string, $form);
    }
}
