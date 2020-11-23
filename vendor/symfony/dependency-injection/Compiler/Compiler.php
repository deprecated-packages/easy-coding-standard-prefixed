<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Exception\EnvParameterException;
/**
 * This class is used to remove circular dependencies between individual passes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class Compiler
{
    private $passConfig;
    private $log = [];
    private $serviceReferenceGraph;
    public function __construct()
    {
        $this->passConfig = new \_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Compiler\PassConfig();
        $this->serviceReferenceGraph = new \_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Compiler\ServiceReferenceGraph();
    }
    /**
     * Returns the PassConfig.
     *
     * @return PassConfig The PassConfig instance
     */
    public function getPassConfig()
    {
        return $this->passConfig;
    }
    /**
     * Returns the ServiceReferenceGraph.
     *
     * @return ServiceReferenceGraph The ServiceReferenceGraph instance
     */
    public function getServiceReferenceGraph()
    {
        return $this->serviceReferenceGraph;
    }
    /**
     * Adds a pass to the PassConfig.
     *
     * @param string $type     The type of the pass
     * @param int    $priority Used to sort the passes
     */
    public function addPass(\_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface $pass, $type = \_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Compiler\PassConfig::TYPE_BEFORE_OPTIMIZATION, int $priority = 0)
    {
        $this->passConfig->addPass($pass, $type, $priority);
    }
    /**
     * @final
     */
    public function log(\_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface $pass, string $message)
    {
        if (\false !== \strpos($message, "\n")) {
            $message = \str_replace("\n", "\n" . \get_class($pass) . ': ', \trim($message));
        }
        $this->log[] = \get_class($pass) . ': ' . $message;
    }
    /**
     * Returns the log.
     *
     * @return array Log array
     */
    public function getLog()
    {
        return $this->log;
    }
    /**
     * Run the Compiler and process all Passes.
     */
    public function compile(\_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        try {
            foreach ($this->passConfig->getPasses() as $pass) {
                $pass->process($container);
            }
        } catch (\Exception $e) {
            $usedEnvs = [];
            $prev = $e;
            do {
                $msg = $prev->getMessage();
                if ($msg !== ($resolvedMsg = $container->resolveEnvPlaceholders($msg, null, $usedEnvs))) {
                    $r = new \ReflectionProperty($prev, 'message');
                    $r->setAccessible(\true);
                    $r->setValue($prev, $resolvedMsg);
                }
            } while ($prev = $prev->getPrevious());
            if ($usedEnvs) {
                $e = new \_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Exception\EnvParameterException($usedEnvs, $e);
            }
            throw $e;
        } finally {
            $this->getServiceReferenceGraph()->clear();
        }
    }
}
