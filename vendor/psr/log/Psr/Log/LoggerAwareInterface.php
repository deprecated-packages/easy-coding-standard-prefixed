<?php

namespace _PhpScoper9613f3fac51d\Psr\Log;

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
    public function setLogger(\_PhpScoper9613f3fac51d\Psr\Log\LoggerInterface $logger);
}
