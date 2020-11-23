<?php

namespace _PhpScoper59558822d8c7\Psr\Log;

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
    public function setLogger(\_PhpScoper59558822d8c7\Psr\Log\LoggerInterface $logger);
}
