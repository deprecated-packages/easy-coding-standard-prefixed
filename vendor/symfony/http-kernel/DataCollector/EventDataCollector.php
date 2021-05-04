<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc2b2a9bb0e13\Symfony\Component\HttpKernel\DataCollector;

use _PhpScoperc2b2a9bb0e13\Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcher;
use _PhpScoperc2b2a9bb0e13\Symfony\Component\HttpFoundation\Request;
use _PhpScoperc2b2a9bb0e13\Symfony\Component\HttpFoundation\RequestStack;
use _PhpScoperc2b2a9bb0e13\Symfony\Component\HttpFoundation\Response;
use _PhpScoperc2b2a9bb0e13\Symfony\Contracts\EventDispatcher\EventDispatcherInterface;
use _PhpScoperc2b2a9bb0e13\Symfony\Contracts\Service\ResetInterface;
/**
 * EventDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class EventDataCollector extends \_PhpScoperc2b2a9bb0e13\Symfony\Component\HttpKernel\DataCollector\DataCollector implements \_PhpScoperc2b2a9bb0e13\Symfony\Component\HttpKernel\DataCollector\LateDataCollectorInterface
{
    protected $dispatcher;
    private $requestStack;
    private $currentRequest;
    public function __construct(EventDispatcherInterface $dispatcher = null, RequestStack $requestStack = null)
    {
        $this->dispatcher = $dispatcher;
        $this->requestStack = $requestStack;
    }
    /**
     * {@inheritdoc}
     */
    public function collect(Request $request, Response $response, \Throwable $exception = null)
    {
        $this->currentRequest = $this->requestStack && $this->requestStack->getMasterRequest() !== $request ? $request : null;
        $this->data = ['called_listeners' => [], 'not_called_listeners' => [], 'orphaned_events' => []];
    }
    public function reset()
    {
        $this->data = [];
        if ($this->dispatcher instanceof ResetInterface) {
            $this->dispatcher->reset();
        }
    }
    public function lateCollect()
    {
        if ($this->dispatcher instanceof TraceableEventDispatcher) {
            $this->setCalledListeners($this->dispatcher->getCalledListeners($this->currentRequest));
            $this->setNotCalledListeners($this->dispatcher->getNotCalledListeners($this->currentRequest));
            $this->setOrphanedEvents($this->dispatcher->getOrphanedEvents($this->currentRequest));
        }
        $this->data = $this->cloneVar($this->data);
    }
    /**
     * Sets the called listeners.
     *
     * @param array $listeners An array of called listeners
     *
     * @see TraceableEventDispatcher
     */
    public function setCalledListeners(array $listeners)
    {
        $this->data['called_listeners'] = $listeners;
    }
    /**
     * Gets the called listeners.
     *
     * @return array An array of called listeners
     *
     * @see TraceableEventDispatcher
     */
    public function getCalledListeners()
    {
        return $this->data['called_listeners'];
    }
    /**
     * Sets the not called listeners.
     *
     * @see TraceableEventDispatcher
     */
    public function setNotCalledListeners(array $listeners)
    {
        $this->data['not_called_listeners'] = $listeners;
    }
    /**
     * Gets the not called listeners.
     *
     * @return array
     *
     * @see TraceableEventDispatcher
     */
    public function getNotCalledListeners()
    {
        return $this->data['not_called_listeners'];
    }
    /**
     * Sets the orphaned events.
     *
     * @param array $events An array of orphaned events
     *
     * @see TraceableEventDispatcher
     */
    public function setOrphanedEvents(array $events)
    {
        $this->data['orphaned_events'] = $events;
    }
    /**
     * Gets the orphaned events.
     *
     * @return array An array of orphaned events
     *
     * @see TraceableEventDispatcher
     */
    public function getOrphanedEvents()
    {
        return $this->data['orphaned_events'];
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'events';
    }
}
