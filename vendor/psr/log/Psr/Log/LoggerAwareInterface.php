<?php

namespace _PhpScoper32abeec2fe5a\Psr\Log;

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
    public function setLogger(\_PhpScoper32abeec2fe5a\Psr\Log\LoggerInterface $logger);
}
