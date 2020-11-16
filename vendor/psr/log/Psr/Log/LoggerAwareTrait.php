<?php

namespace _PhpScoper1103e00fb46b\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /** @var LoggerInterface */
    protected $logger;
    /**
     * Sets a logger.
     * 
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoper1103e00fb46b\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
