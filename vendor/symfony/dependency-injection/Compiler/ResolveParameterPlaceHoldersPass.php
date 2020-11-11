<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Definition;
use _PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
/**
 * Resolves all parameter placeholders "%somevalue%" to their real values.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ResolveParameterPlaceHoldersPass extends \_PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Compiler\AbstractRecursivePass
{
    private $bag;
    private $resolveArrays;
    public function __construct(bool $resolveArrays = \true)
    {
        $this->resolveArrays = $resolveArrays;
    }
    /**
     * {@inheritdoc}
     *
     * @throws ParameterNotFoundException
     */
    public function process(\_PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $this->bag = $container->getParameterBag();
        try {
            parent::process($container);
            $aliases = [];
            foreach ($container->getAliases() as $name => $target) {
                $this->currentId = $name;
                $aliases[$this->bag->resolveValue($name)] = $target;
            }
            $container->setAliases($aliases);
        } catch (\_PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException $e) {
            $e->setSourceId($this->currentId);
            throw $e;
        }
        $this->bag->resolve();
        $this->bag = null;
    }
    protected function processValue($value, $isRoot = \false)
    {
        if (\is_string($value)) {
            $v = $this->bag->resolveValue($value);
            return $this->resolveArrays || !$v || !\is_array($v) ? $v : $value;
        }
        if ($value instanceof \_PhpScoper06c66bea2cf6\Symfony\Component\DependencyInjection\Definition) {
            $value->setBindings($this->processValue($value->getBindings()));
            $changes = $value->getChanges();
            if (isset($changes['class'])) {
                $value->setClass($this->bag->resolveValue($value->getClass()));
            }
            if (isset($changes['file'])) {
                $value->setFile($this->bag->resolveValue($value->getFile()));
            }
        }
        $value = parent::processValue($value, $isRoot);
        if ($value && \is_array($value)) {
            $value = \array_combine($this->bag->resolveValue(\array_keys($value)), $value);
        }
        return $value;
    }
}
