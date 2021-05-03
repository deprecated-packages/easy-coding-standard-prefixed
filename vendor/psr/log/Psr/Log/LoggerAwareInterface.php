<?php

namespace _PhpScoper7239e3eaf11a\Psr\Log;

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
    public function setLogger(\_PhpScoper7239e3eaf11a\Psr\Log\LoggerInterface $logger);
}
