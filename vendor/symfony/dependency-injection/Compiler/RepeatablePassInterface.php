<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Compiler;

/**
 * Interface that must be implemented by passes that are run as part of an
 * RepeatedPass.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @deprecated since Symfony 4.2.
 */
interface RepeatablePassInterface extends \_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function setRepeatedPass(\_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Compiler\RepeatedPass $repeatedPass);
}
