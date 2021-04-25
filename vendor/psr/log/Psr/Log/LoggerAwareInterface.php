<?php

namespace _PhpScoper5686a261d89c\Psr\Log;

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
    public function setLogger(\_PhpScoper5686a261d89c\Psr\Log\LoggerInterface $logger);
}
