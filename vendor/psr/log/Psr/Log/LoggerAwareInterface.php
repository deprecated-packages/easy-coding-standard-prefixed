<?php

namespace _PhpScoper35ec99c463ee\Psr\Log;

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
    public function setLogger(\_PhpScoper35ec99c463ee\Psr\Log\LoggerInterface $logger);
}
