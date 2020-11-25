<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper544eb478a6f6\Symfony\Component\Mime\Encoder;

use _PhpScoper544eb478a6f6\Symfony\Component\Mime\Exception\RuntimeException;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class Base64ContentEncoder extends \_PhpScoper544eb478a6f6\Symfony\Component\Mime\Encoder\Base64Encoder implements \_PhpScoper544eb478a6f6\Symfony\Component\Mime\Encoder\ContentEncoderInterface
{
    public function encodeByteStream($stream, int $maxLineLength = 0) : iterable
    {
        if (!\is_resource($stream)) {
            throw new \TypeError(\sprintf('Method "%s" takes a stream as a first argument.', __METHOD__));
        }
        $filter = \stream_filter_append($stream, 'convert.base64-encode', \STREAM_FILTER_READ, ['line-length' => 0 >= $maxLineLength || 76 < $maxLineLength ? 76 : $maxLineLength, 'line-break-chars' => "\r\n"]);
        if (!\is_resource($filter)) {
            throw new \_PhpScoper544eb478a6f6\Symfony\Component\Mime\Exception\RuntimeException('Unable to set the base64 content encoder to the filter.');
        }
        if (\stream_get_meta_data($stream)['seekable'] ?? \false) {
            \rewind($stream);
        }
        while (!\feof($stream)) {
            (yield \fread($stream, 8192));
        }
        \stream_filter_remove($filter);
    }
    public function getName() : string
    {
        return 'base64';
    }
}
