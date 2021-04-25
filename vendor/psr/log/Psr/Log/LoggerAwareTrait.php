<?php

namespace _PhpScoper99c9619a6243\Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(\_PhpScoper99c9619a6243\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
