<?php

namespace _PhpScoperf53473b45c36\Psr\Log;

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
    public function setLogger(\_PhpScoperf53473b45c36\Psr\Log\LoggerInterface $logger);
}
