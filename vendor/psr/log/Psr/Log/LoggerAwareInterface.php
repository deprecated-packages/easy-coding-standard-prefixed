<?php

namespace _PhpScoper842c7347e6be\Psr\Log;

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
    public function setLogger(\_PhpScoper842c7347e6be\Psr\Log\LoggerInterface $logger);
}
