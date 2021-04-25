<?php

namespace _PhpScoperff1e514762b4\Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(\_PhpScoperff1e514762b4\Psr\Log\LoggerInterface $logger);
}
