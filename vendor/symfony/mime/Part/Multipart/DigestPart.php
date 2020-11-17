<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad4b7e2c09d8\Symfony\Component\Mime\Part\Multipart;

use _PhpScoperad4b7e2c09d8\Symfony\Component\Mime\Part\AbstractMultipartPart;
use _PhpScoperad4b7e2c09d8\Symfony\Component\Mime\Part\MessagePart;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class DigestPart extends \_PhpScoperad4b7e2c09d8\Symfony\Component\Mime\Part\AbstractMultipartPart
{
    public function __construct(\_PhpScoperad4b7e2c09d8\Symfony\Component\Mime\Part\MessagePart ...$parts)
    {
        parent::__construct(...$parts);
    }
    public function getMediaSubtype() : string
    {
        return 'digest';
    }
}
