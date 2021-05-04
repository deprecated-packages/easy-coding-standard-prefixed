<?php

namespace _PhpScoperc2b2a9bb0e13\Psr\Log;

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
    public function setLogger(\_PhpScoperc2b2a9bb0e13\Psr\Log\LoggerInterface $logger);
}
