<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd47a2fa2a77e\Symfony\Component\DependencyInjection;

/**
 * EnvVarLoaderInterface objects return key/value pairs that are added to the list of available env vars.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface EnvVarLoaderInterface
{
    /**
     * @return string[] Key/value pairs that can be accessed using the regular "%env()%" syntax
     */
    public function loadEnvVars() : array;
}
