<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb383f16e851e\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperb383f16e851e\Psr\Container\ContainerInterface;
use _PhpScoperb383f16e851e\Symfony\Component\HttpFoundation\Session\SessionInterface;
use _PhpScoperb383f16e851e\Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
/**
 * Sets the session in the request.
 *
 * When the passed container contains a "session_storage" entry which
 * holds a NativeSessionStorage instance, the "cookie_secure" option
 * will be set to true whenever the current master request is secure.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class SessionListener extends \_PhpScoperb383f16e851e\Symfony\Component\HttpKernel\EventListener\AbstractSessionListener
{
    public function __construct(\_PhpScoperb383f16e851e\Psr\Container\ContainerInterface $container)
    {
        $this->container = $container;
    }
    protected function getSession() : ?\_PhpScoperb383f16e851e\Symfony\Component\HttpFoundation\Session\SessionInterface
    {
        if (!$this->container->has('session')) {
            return null;
        }
        if ($this->container->has('session_storage') && ($storage = $this->container->get('session_storage')) instanceof \_PhpScoperb383f16e851e\Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage && ($masterRequest = $this->container->get('request_stack')->getMasterRequest()) && $masterRequest->isSecure()) {
            $storage->setOptions(['cookie_secure' => \true]);
        }
        return $this->container->get('session');
    }
}