<?php

namespace _PhpScoper8de082cbb8c7\Psr\Log;

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
    public function setLogger(\_PhpScoper8de082cbb8c7\Psr\Log\LoggerInterface $logger);
}
