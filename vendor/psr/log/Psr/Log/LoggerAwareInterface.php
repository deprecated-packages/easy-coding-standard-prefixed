<?php

namespace _PhpScoperf523baae4f87\Psr\Log;

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
    public function setLogger(\_PhpScoperf523baae4f87\Psr\Log\LoggerInterface $logger);
}
