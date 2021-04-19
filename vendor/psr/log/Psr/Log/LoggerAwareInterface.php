<?php

namespace _PhpScoper855b7fb41c61\Psr\Log;

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
    public function setLogger(\_PhpScoper855b7fb41c61\Psr\Log\LoggerInterface $logger);
}
