<?php

namespace _PhpScoper000f93dc572d\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface|null
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoper000f93dc572d\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
