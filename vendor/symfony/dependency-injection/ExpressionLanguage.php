<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection;

use _PhpScoperc4ea0f0bd23f\Psr\Cache\CacheItemPoolInterface;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\ExpressionLanguage\ExpressionLanguage as BaseExpressionLanguage;
if (!\class_exists(\_PhpScoperc4ea0f0bd23f\Symfony\Component\ExpressionLanguage\ExpressionLanguage::class)) {
    return;
}
/**
 * Adds some function to the default ExpressionLanguage.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see ExpressionLanguageProvider
 */
class ExpressionLanguage extends \_PhpScoperc4ea0f0bd23f\Symfony\Component\ExpressionLanguage\ExpressionLanguage
{
    /**
     * {@inheritdoc}
     */
    public function __construct(\_PhpScoperc4ea0f0bd23f\Psr\Cache\CacheItemPoolInterface $cache = null, array $providers = [], callable $serviceCompiler = null)
    {
        // prepend the default provider to let users override it easily
        \array_unshift($providers, new \_PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\ExpressionLanguageProvider($serviceCompiler));
        parent::__construct($cache, $providers);
    }
}
