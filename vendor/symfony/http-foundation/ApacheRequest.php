<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercb217fd4e736\Symfony\Component\HttpFoundation;

@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.4, use "%s" instead.', \_PhpScopercb217fd4e736\Symfony\Component\HttpFoundation\ApacheRequest::class, \_PhpScopercb217fd4e736\Symfony\Component\HttpFoundation\Request::class), \E_USER_DEPRECATED);
/**
 * Request represents an HTTP request from an Apache server.
 *
 * @deprecated since Symfony 4.4. Use the Request class instead.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ApacheRequest extends \_PhpScopercb217fd4e736\Symfony\Component\HttpFoundation\Request
{
    /**
     * {@inheritdoc}
     */
    protected function prepareRequestUri()
    {
        return $this->server->get('REQUEST_URI');
    }
    /**
     * {@inheritdoc}
     */
    protected function prepareBaseUrl()
    {
        $baseUrl = $this->server->get('SCRIPT_NAME');
        if (\false === \strpos($this->server->get('REQUEST_URI'), $baseUrl)) {
            // assume mod_rewrite
            return \rtrim(\dirname($baseUrl), '/\\');
        }
        return $baseUrl;
    }
}
