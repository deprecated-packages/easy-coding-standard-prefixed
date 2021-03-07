<?php

namespace _PhpScoper6625323d9c29\Psr\Log;

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
    public function setLogger(\_PhpScoper6625323d9c29\Psr\Log\LoggerInterface $logger);
}
