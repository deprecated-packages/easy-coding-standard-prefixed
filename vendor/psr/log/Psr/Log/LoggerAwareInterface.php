<?php

namespace _PhpScoper3e7ab659bd82\Psr\Log;

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
    public function setLogger(\_PhpScoper3e7ab659bd82\Psr\Log\LoggerInterface $logger);
}
