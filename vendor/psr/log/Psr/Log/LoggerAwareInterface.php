<?php

namespace _PhpScoper4e47e3b12394\Psr\Log;

/**
 * Describes a logger-aware instance
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface $logger
     * @return null
     */
    public function setLogger(\_PhpScoper4e47e3b12394\Psr\Log\LoggerInterface $logger);
}
