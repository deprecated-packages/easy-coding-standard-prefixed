<?php

namespace _PhpScopercd2fc5ef50ef\Psr\Log;

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
    public function setLogger(\_PhpScopercd2fc5ef50ef\Psr\Log\LoggerInterface $logger);
}
