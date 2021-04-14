<?php

namespace _PhpScopercc9aec205203\Psr\Log;

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
    public function setLogger(\_PhpScopercc9aec205203\Psr\Log\LoggerInterface $logger);
}
