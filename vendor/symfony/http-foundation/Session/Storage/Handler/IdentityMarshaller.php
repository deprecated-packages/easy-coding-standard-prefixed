<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperda2604e33acb\Symfony\Component\HttpFoundation\Session\Storage\Handler;

use _PhpScoperda2604e33acb\Symfony\Component\Cache\Marshaller\MarshallerInterface;
/**
 * @author Ahmed TAILOULOUTE <ahmed.tailouloute@gmail.com>
 */
class IdentityMarshaller implements \_PhpScoperda2604e33acb\Symfony\Component\Cache\Marshaller\MarshallerInterface
{
    /**
     * {@inheritdoc}
     */
    public function marshall(array $values, ?array &$failed) : array
    {
        foreach ($values as $key => $value) {
            if (!\is_string($value)) {
                throw new \LogicException(\sprintf('%s accepts only string as data.', __METHOD__));
            }
        }
        return $values;
    }
    /**
     * {@inheritdoc}
     */
    public function unmarshall(string $value) : string
    {
        return $value;
    }
}
