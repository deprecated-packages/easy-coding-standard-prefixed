<?php

namespace _PhpScoper4f608e7525a4\Psr\Log;

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
    public function setLogger(\_PhpScoper4f608e7525a4\Psr\Log\LoggerInterface $logger);
}
