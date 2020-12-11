<?php

namespace _PhpScoper1e80a2e03314\Psr\Log;

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
    public function setLogger(\_PhpScoper1e80a2e03314\Psr\Log\LoggerInterface $logger);
}
