<?php

namespace _PhpScoper6a8174766bf7\Psr\Log;

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
    public function setLogger(\_PhpScoper6a8174766bf7\Psr\Log\LoggerInterface $logger);
}
