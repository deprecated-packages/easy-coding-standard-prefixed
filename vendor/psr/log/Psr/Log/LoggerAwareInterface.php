<?php

namespace _PhpScoper47644ab3aa9a\Psr\Log;

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
    public function setLogger(\_PhpScoper47644ab3aa9a\Psr\Log\LoggerInterface $logger);
}
