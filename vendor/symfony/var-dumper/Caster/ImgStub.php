<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaad82bb90a86\Symfony\Component\VarDumper\Caster;

/**
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class ImgStub extends \_PhpScoperaad82bb90a86\Symfony\Component\VarDumper\Caster\ConstStub
{
    public function __construct(string $data, string $contentType, string $size)
    {
        $this->value = '';
        $this->attr['img-data'] = $data;
        $this->attr['img-size'] = $size;
        $this->attr['content-type'] = $contentType;
    }
}
