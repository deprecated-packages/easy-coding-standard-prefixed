<?php

namespace _PhpScoper49c742f5a4ee\Psr\Log;

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
    public function setLogger(\_PhpScoper49c742f5a4ee\Psr\Log\LoggerInterface $logger);
}
