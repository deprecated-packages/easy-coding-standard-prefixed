<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper83b3b9a317c0\Symfony\Component\Mime\Part\Multipart;

use _PhpScoper83b3b9a317c0\Symfony\Component\Mime\Part\AbstractMultipartPart;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class AlternativePart extends \_PhpScoper83b3b9a317c0\Symfony\Component\Mime\Part\AbstractMultipartPart
{
    public function getMediaSubtype() : string
    {
        return 'alternative';
    }
}
