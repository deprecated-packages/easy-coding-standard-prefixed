<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4b135661b3a\Symfony\Component\Mime\Part\Multipart;

use _PhpScoperc4b135661b3a\Symfony\Component\Mime\Part\AbstractMultipartPart;
use _PhpScoperc4b135661b3a\Symfony\Component\Mime\Part\AbstractPart;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class RelatedPart extends \_PhpScoperc4b135661b3a\Symfony\Component\Mime\Part\AbstractMultipartPart
{
    private $mainPart;
    public function __construct(\_PhpScoperc4b135661b3a\Symfony\Component\Mime\Part\AbstractPart $mainPart, \_PhpScoperc4b135661b3a\Symfony\Component\Mime\Part\AbstractPart $part, \_PhpScoperc4b135661b3a\Symfony\Component\Mime\Part\AbstractPart ...$parts)
    {
        $this->mainPart = $mainPart;
        $this->prepareParts($part, ...$parts);
        parent::__construct($part, ...$parts);
    }
    public function getParts() : array
    {
        return \array_merge([$this->mainPart], parent::getParts());
    }
    public function getMediaSubtype() : string
    {
        return 'related';
    }
    private function generateContentId() : string
    {
        return \bin2hex(\random_bytes(16)) . '@symfony';
    }
    private function prepareParts(\_PhpScoperc4b135661b3a\Symfony\Component\Mime\Part\AbstractPart ...$parts) : void
    {
        foreach ($parts as $part) {
            if (!$part->getHeaders()->has('Content-ID')) {
                $part->getHeaders()->setHeaderBody('Id', 'Content-ID', $this->generateContentId());
            }
        }
    }
}
