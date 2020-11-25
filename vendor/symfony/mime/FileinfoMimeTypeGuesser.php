<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper418afc2f157c\Symfony\Component\Mime;

use _PhpScoper418afc2f157c\Symfony\Component\Mime\Exception\InvalidArgumentException;
use _PhpScoper418afc2f157c\Symfony\Component\Mime\Exception\LogicException;
/**
 * Guesses the MIME type using the PECL extension FileInfo.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @experimental in 4.3
 */
class FileinfoMimeTypeGuesser implements \_PhpScoper418afc2f157c\Symfony\Component\Mime\MimeTypeGuesserInterface
{
    private $magicFile;
    /**
     * @param string $magicFile A magic file to use with the finfo instance
     *
     * @see http://www.php.net/manual/en/function.finfo-open.php
     */
    public function __construct(string $magicFile = null)
    {
        $this->magicFile = $magicFile;
    }
    /**
     * {@inheritdoc}
     */
    public function isGuesserSupported() : bool
    {
        return \function_exists('finfo_open');
    }
    /**
     * {@inheritdoc}
     */
    public function guessMimeType(string $path) : ?string
    {
        if (!\is_file($path) || !\is_readable($path)) {
            throw new \_PhpScoper418afc2f157c\Symfony\Component\Mime\Exception\InvalidArgumentException(\sprintf('The "%s" file does not exist or is not readable.', $path));
        }
        if (!$this->isGuesserSupported()) {
            throw new \_PhpScoper418afc2f157c\Symfony\Component\Mime\Exception\LogicException(\sprintf('The "%s" guesser is not supported.', __CLASS__));
        }
        if (\false === ($finfo = new \finfo(\FILEINFO_MIME_TYPE, $this->magicFile))) {
            return null;
        }
        return $finfo->file($path);
    }
}
