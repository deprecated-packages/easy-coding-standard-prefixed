<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper3fa05b4669af\Symfony\Component\Mime;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Xavier De Cock <xdecock@gmail.com>
 *
 * @internal
 *
 * @experimental in 4.3
 */
final class CharacterStream
{
    /** Pre-computed for optimization */
    private const UTF8_LENGTH_MAP = ["\0" => 1, "\1" => 1, "\2" => 1, "\3" => 1, "\4" => 1, "\5" => 1, "\6" => 1, "\7" => 1, "\10" => 1, "\t" => 1, "\n" => 1, "\v" => 1, "\f" => 1, "\r" => 1, "\16" => 1, "\17" => 1, "\20" => 1, "\21" => 1, "\22" => 1, "\23" => 1, "\24" => 1, "\25" => 1, "\26" => 1, "\27" => 1, "\30" => 1, "\31" => 1, "\32" => 1, "\33" => 1, "\34" => 1, "\35" => 1, "\36" => 1, "\37" => 1, " " => 1, "!" => 1, "\"" => 1, "#" => 1, "\$" => 1, "%" => 1, "&" => 1, "'" => 1, "(" => 1, ")" => 1, "*" => 1, "+" => 1, "," => 1, "-" => 1, "." => 1, "/" => 1, "0" => 1, "1" => 1, "2" => 1, "3" => 1, "4" => 1, "5" => 1, "6" => 1, "7" => 1, "8" => 1, "9" => 1, ":" => 1, ";" => 1, "<" => 1, "=" => 1, ">" => 1, "?" => 1, "@" => 1, "A" => 1, "B" => 1, "C" => 1, "D" => 1, "E" => 1, "F" => 1, "G" => 1, "H" => 1, "I" => 1, "J" => 1, "K" => 1, "L" => 1, "M" => 1, "N" => 1, "O" => 1, "P" => 1, "Q" => 1, "R" => 1, "S" => 1, "T" => 1, "U" => 1, "V" => 1, "W" => 1, "X" => 1, "Y" => 1, "Z" => 1, "[" => 1, "\\" => 1, "]" => 1, "^" => 1, "_" => 1, "`" => 1, "a" => 1, "b" => 1, "c" => 1, "d" => 1, "e" => 1, "f" => 1, "g" => 1, "h" => 1, "i" => 1, "j" => 1, "k" => 1, "l" => 1, "m" => 1, "n" => 1, "o" => 1, "p" => 1, "q" => 1, "r" => 1, "s" => 1, "t" => 1, "u" => 1, "v" => 1, "w" => 1, "x" => 1, "y" => 1, "z" => 1, "{" => 1, "|" => 1, "}" => 1, "~" => 1, "" => 1, "€" => 0, "" => 0, "‚" => 0, "ƒ" => 0, "„" => 0, "…" => 0, "†" => 0, "‡" => 0, "ˆ" => 0, "‰" => 0, "Š" => 0, "‹" => 0, "Œ" => 0, "" => 0, "Ž" => 0, "" => 0, "" => 0, "‘" => 0, "’" => 0, "“" => 0, "”" => 0, "•" => 0, "–" => 0, "—" => 0, "˜" => 0, "™" => 0, "š" => 0, "›" => 0, "œ" => 0, "" => 0, "ž" => 0, "Ÿ" => 0, " " => 0, "¡" => 0, "¢" => 0, "£" => 0, "¤" => 0, "¥" => 0, "¦" => 0, "§" => 0, "¨" => 0, "©" => 0, "ª" => 0, "«" => 0, "¬" => 0, "­" => 0, "®" => 0, "¯" => 0, "°" => 0, "±" => 0, "²" => 0, "³" => 0, "´" => 0, "µ" => 0, "¶" => 0, "·" => 0, "¸" => 0, "¹" => 0, "º" => 0, "»" => 0, "¼" => 0, "½" => 0, "¾" => 0, "¿" => 0, "À" => 2, "Á" => 2, "Â" => 2, "Ã" => 2, "Ä" => 2, "Å" => 2, "Æ" => 2, "Ç" => 2, "È" => 2, "É" => 2, "Ê" => 2, "Ë" => 2, "Ì" => 2, "Í" => 2, "Î" => 2, "Ï" => 2, "Ð" => 2, "Ñ" => 2, "Ò" => 2, "Ó" => 2, "Ô" => 2, "Õ" => 2, "Ö" => 2, "×" => 2, "Ø" => 2, "Ù" => 2, "Ú" => 2, "Û" => 2, "Ü" => 2, "Ý" => 2, "Þ" => 2, "ß" => 2, "à" => 3, "á" => 3, "â" => 3, "ã" => 3, "ä" => 3, "å" => 3, "æ" => 3, "ç" => 3, "è" => 3, "é" => 3, "ê" => 3, "ë" => 3, "ì" => 3, "í" => 3, "î" => 3, "ï" => 3, "ð" => 4, "ñ" => 4, "ò" => 4, "ó" => 4, "ô" => 4, "õ" => 4, "ö" => 4, "÷" => 4, "ø" => 5, "ù" => 5, "ú" => 5, "û" => 5, "ü" => 6, "ý" => 6, "þ" => 0, "ÿ" => 0];
    private $data = '';
    private $dataSize = 0;
    private $map = [];
    private $charCount = 0;
    private $currentPos = 0;
    private $fixedWidth = 0;
    /**
     * @param resource|string $input
     */
    public function __construct($input, ?string $charset = 'utf-8')
    {
        $charset = \strtolower(\trim($charset)) ?: 'utf-8';
        if ('utf-8' === $charset || 'utf8' === $charset) {
            $this->fixedWidth = 0;
            $this->map = ['p' => [], 'i' => []];
        } else {
            switch ($charset) {
                // 16 bits
                case 'ucs2':
                case 'ucs-2':
                case 'utf16':
                case 'utf-16':
                    $this->fixedWidth = 2;
                    break;
                // 32 bits
                case 'ucs4':
                case 'ucs-4':
                case 'utf32':
                case 'utf-32':
                    $this->fixedWidth = 4;
                    break;
                // 7-8 bit charsets: (us-)?ascii, (iso|iec)-?8859-?[0-9]+, windows-?125[0-9], cp-?[0-9]+, ansi, macintosh,
                //                   koi-?7, koi-?8-?.+, mik, (cork|t1), v?iscii
                // and fallback
                default:
                    $this->fixedWidth = 1;
            }
        }
        if (\is_resource($input)) {
            $blocks = 512;
            if (\stream_get_meta_data($input)['seekable'] ?? \false) {
                \rewind($input);
            }
            while (\false !== ($read = \fread($input, $blocks))) {
                $this->write($read);
            }
        } else {
            $this->write($input);
        }
    }
    public function read(int $length) : ?string
    {
        if ($this->currentPos >= $this->charCount) {
            return null;
        }
        $ret = null;
        $length = $this->currentPos + $length > $this->charCount ? $this->charCount - $this->currentPos : $length;
        if ($this->fixedWidth > 0) {
            $len = $length * $this->fixedWidth;
            $ret = \substr($this->data, $this->currentPos * $this->fixedWidth, $len);
            $this->currentPos += $length;
        } else {
            $end = $this->currentPos + $length;
            $end = $end > $this->charCount ? $this->charCount : $end;
            $ret = '';
            $start = 0;
            if ($this->currentPos > 0) {
                $start = $this->map['p'][$this->currentPos - 1];
            }
            $to = $start;
            for (; $this->currentPos < $end; ++$this->currentPos) {
                if (isset($this->map['i'][$this->currentPos])) {
                    $ret .= \substr($this->data, $start, $to - $start) . '?';
                    $start = $this->map['p'][$this->currentPos];
                } else {
                    $to = $this->map['p'][$this->currentPos];
                }
            }
            $ret .= \substr($this->data, $start, $to - $start);
        }
        return $ret;
    }
    public function readBytes(int $length) : ?array
    {
        if (null !== ($read = $this->read($length))) {
            return \array_map('ord', \str_split($read, 1));
        }
        return null;
    }
    public function setPointer(int $charOffset) : void
    {
        if ($this->charCount < $charOffset) {
            $charOffset = $this->charCount;
        }
        $this->currentPos = $charOffset;
    }
    public function write(string $chars) : void
    {
        $ignored = '';
        $this->data .= $chars;
        if ($this->fixedWidth > 0) {
            $strlen = \strlen($chars);
            $ignoredL = $strlen % $this->fixedWidth;
            $ignored = $ignoredL ? \substr($chars, -$ignoredL) : '';
            $this->charCount += ($strlen - $ignoredL) / $this->fixedWidth;
        } else {
            $this->charCount += $this->getUtf8CharPositions($chars, $this->dataSize, $ignored);
        }
        $this->dataSize = \strlen($this->data) - \strlen($ignored);
    }
    private function getUtf8CharPositions(string $string, int $startOffset, &$ignoredChars) : int
    {
        $strlen = \strlen($string);
        $charPos = \count($this->map['p']);
        $foundChars = 0;
        $invalid = \false;
        for ($i = 0; $i < $strlen; ++$i) {
            $char = $string[$i];
            $size = self::UTF8_LENGTH_MAP[$char];
            if (0 == $size) {
                /* char is invalid, we must wait for a resync */
                $invalid = \true;
                continue;
            }
            if ($invalid) {
                /* We mark the chars as invalid and start a new char */
                $this->map['p'][$charPos + $foundChars] = $startOffset + $i;
                $this->map['i'][$charPos + $foundChars] = \true;
                ++$foundChars;
                $invalid = \false;
            }
            if ($i + $size > $strlen) {
                $ignoredChars = \substr($string, $i);
                break;
            }
            for ($j = 1; $j < $size; ++$j) {
                $char = $string[$i + $j];
                if ($char > "" && $char < "À") {
                    // Valid - continue parsing
                } else {
                    /* char is invalid, we must wait for a resync */
                    $invalid = \true;
                    continue 2;
                }
            }
            /* Ok we got a complete char here */
            $this->map['p'][$charPos + $foundChars] = $startOffset + $i + $size;
            $i += $j - 1;
            ++$foundChars;
        }
        return $foundChars;
    }
}
