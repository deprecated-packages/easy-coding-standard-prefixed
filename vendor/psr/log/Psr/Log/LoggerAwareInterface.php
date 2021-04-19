<?php

namespace _PhpScoper78e1a27e740b\Psr\Log;

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
    public function setLogger(\_PhpScoper78e1a27e740b\Psr\Log\LoggerInterface $logger);
}
