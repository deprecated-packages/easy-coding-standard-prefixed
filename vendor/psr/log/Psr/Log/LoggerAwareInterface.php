<?php

namespace _PhpScoper3c4e863e8a34\Psr\Log;

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
    public function setLogger(\_PhpScoper3c4e863e8a34\Psr\Log\LoggerInterface $logger);
}
