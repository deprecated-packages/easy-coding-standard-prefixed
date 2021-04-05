<?php

namespace _PhpScoper457dd3bd73ba\Psr\Log;

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
    public function setLogger(\_PhpScoper457dd3bd73ba\Psr\Log\LoggerInterface $logger);
}
