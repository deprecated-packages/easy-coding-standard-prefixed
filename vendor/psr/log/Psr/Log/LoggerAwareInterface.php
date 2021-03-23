<?php

namespace _PhpScoper70e3784a2d21\Psr\Log;

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
    public function setLogger(\_PhpScoper70e3784a2d21\Psr\Log\LoggerInterface $logger);
}
