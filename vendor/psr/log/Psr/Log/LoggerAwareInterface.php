<?php

namespace _PhpScoper06c66bea2cf6\Psr\Log;

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
    public function setLogger(\_PhpScoper06c66bea2cf6\Psr\Log\LoggerInterface $logger);
}
