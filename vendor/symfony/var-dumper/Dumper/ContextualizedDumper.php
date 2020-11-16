<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperedc2e0c967db\Symfony\Component\VarDumper\Dumper;

use _PhpScoperedc2e0c967db\Symfony\Component\VarDumper\Cloner\Data;
use _PhpScoperedc2e0c967db\Symfony\Component\VarDumper\Dumper\ContextProvider\ContextProviderInterface;
/**
 * @author Kévin Thérage <therage.kevin@gmail.com>
 */
class ContextualizedDumper implements \_PhpScoperedc2e0c967db\Symfony\Component\VarDumper\Dumper\DataDumperInterface
{
    private $wrappedDumper;
    private $contextProviders;
    /**
     * @param ContextProviderInterface[] $contextProviders
     */
    public function __construct(\_PhpScoperedc2e0c967db\Symfony\Component\VarDumper\Dumper\DataDumperInterface $wrappedDumper, array $contextProviders)
    {
        $this->wrappedDumper = $wrappedDumper;
        $this->contextProviders = $contextProviders;
    }
    public function dump(\_PhpScoperedc2e0c967db\Symfony\Component\VarDumper\Cloner\Data $data)
    {
        $context = [];
        foreach ($this->contextProviders as $contextProvider) {
            $context[\get_class($contextProvider)] = $contextProvider->getContext();
        }
        $this->wrappedDumper->dump($data->withContext($context));
    }
}
