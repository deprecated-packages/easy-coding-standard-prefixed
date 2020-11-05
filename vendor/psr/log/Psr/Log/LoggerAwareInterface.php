<?php

namespace _PhpScoper6ec31b85adcf\Psr\Log;

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
    public function setLogger(\_PhpScoper6ec31b85adcf\Psr\Log\LoggerInterface $logger);
}
