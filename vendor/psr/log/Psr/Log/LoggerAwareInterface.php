<?php

namespace _PhpScoper70d1796231ae\Psr\Log;

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
    public function setLogger(\_PhpScoper70d1796231ae\Psr\Log\LoggerInterface $logger);
}
