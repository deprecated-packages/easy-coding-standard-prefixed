<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc75fd40d7a6e\Symfony\Component\VarExporter\Exception;

class NotInstantiableTypeException extends \Exception implements \_PhpScoperc75fd40d7a6e\Symfony\Component\VarExporter\Exception\ExceptionInterface
{
    public function __construct(string $type)
    {
        parent::__construct(\sprintf('Type "%s" is not instantiable.', $type));
    }
}
