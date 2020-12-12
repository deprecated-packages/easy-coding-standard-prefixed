<?php

namespace _PhpScoperef870243cfdb\Psr\Log;

/**
 * Describes a logger-aware instance
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface $logger
     * @return null
     */
    public function setLogger(\_PhpScoperef870243cfdb\Psr\Log\LoggerInterface $logger);
}
