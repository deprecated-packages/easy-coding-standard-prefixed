<?php

namespace _PhpScoperf5c57eca8aae\Psr\Log;

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
    public function setLogger(\_PhpScoperf5c57eca8aae\Psr\Log\LoggerInterface $logger);
}
