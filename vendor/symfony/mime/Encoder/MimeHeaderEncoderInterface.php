<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere015d8a3273c\Symfony\Component\Mime\Encoder;

/**
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
interface MimeHeaderEncoderInterface
{
    /**
     * Get the MIME name of this content encoding scheme.
     */
    public function getName() : string;
}
