<?php

namespace _PhpScoper0c0702cca4ac\Psr\Log;

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
    public function setLogger(\_PhpScoper0c0702cca4ac\Psr\Log\LoggerInterface $logger);
}
