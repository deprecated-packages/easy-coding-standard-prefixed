<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperab9510cd5d97\Symfony\Component\Mime\Encoder;

use _PhpScoperab9510cd5d97\Symfony\Component\Mime\Exception\AddressEncoderException;
/**
 * @author Christian Schmidt
 *
 * @experimental in 4.3
 */
interface AddressEncoderInterface
{
    /**
     * Encodes an email address.
     *
     * @throws AddressEncoderException if the email cannot be represented in
     *                                 the encoding implemented by this class
     */
    public function encodeString(string $address) : string;
}
