<?php

namespace _PhpScoper85e989d55df2\Psr\Log;

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
    public function setLogger(\_PhpScoper85e989d55df2\Psr\Log\LoggerInterface $logger);
}
