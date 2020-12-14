<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc64a4ac1af35\Symfony\Component\Mime\Part\Multipart;

use _PhpScoperc64a4ac1af35\Symfony\Component\Mime\Part\AbstractMultipartPart;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class MixedPart extends \_PhpScoperc64a4ac1af35\Symfony\Component\Mime\Part\AbstractMultipartPart
{
    public function getMediaSubtype() : string
    {
        return 'mixed';
    }
}
