<?php

namespace _PhpScoper880bfa4d8b51\Psr\Log;

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
    public function setLogger(\_PhpScoper880bfa4d8b51\Psr\Log\LoggerInterface $logger);
}
