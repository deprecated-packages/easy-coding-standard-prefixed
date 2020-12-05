<?php

namespace _PhpScoper87c77ad5700d\Psr\Log;

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
    public function setLogger(\_PhpScoper87c77ad5700d\Psr\Log\LoggerInterface $logger);
}
