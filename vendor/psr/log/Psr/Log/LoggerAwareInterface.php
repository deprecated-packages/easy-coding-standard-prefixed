<?php

namespace _PhpScoper8acb416c2f5a\Psr\Log;

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
    public function setLogger(\_PhpScoper8acb416c2f5a\Psr\Log\LoggerInterface $logger);
}
