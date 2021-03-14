<?php

namespace _PhpScoper3d66e802e797\Psr\Log;

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
    public function setLogger(\_PhpScoper3d66e802e797\Psr\Log\LoggerInterface $logger);
}
