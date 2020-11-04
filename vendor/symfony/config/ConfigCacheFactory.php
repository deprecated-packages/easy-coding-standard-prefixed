<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb383f16e851e\Symfony\Component\Config;

/**
 * Basic implementation of ConfigCacheFactoryInterface that
 * creates an instance of the default ConfigCache.
 *
 * This factory and/or cache <em>do not</em> support cache validation
 * by means of ResourceChecker instances (that is, service-based).
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ConfigCacheFactory implements \_PhpScoperb383f16e851e\Symfony\Component\Config\ConfigCacheFactoryInterface
{
    private $debug;
    /**
     * @param bool $debug The debug flag to pass to ConfigCache
     */
    public function __construct(bool $debug)
    {
        $this->debug = $debug;
    }
    /**
     * {@inheritdoc}
     */
    public function cache($file, $callback)
    {
        if (!\is_callable($callback)) {
            throw new \InvalidArgumentException(\sprintf('Invalid type for callback argument. Expected callable, but got "%s".', \gettype($callback)));
        }
        $cache = new \_PhpScoperb383f16e851e\Symfony\Component\Config\ConfigCache($file, $this->debug);
        if (!$cache->isFresh()) {
            $callback($cache);
        }
        return $cache;
    }
}