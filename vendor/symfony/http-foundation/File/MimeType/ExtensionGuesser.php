<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperddde3ba4aebc\Symfony\Component\HttpFoundation\File\MimeType;

use _PhpScoperddde3ba4aebc\Symfony\Component\Mime\MimeTypes;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3, use "%s" instead.', \_PhpScoperddde3ba4aebc\Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser::class, \_PhpScoperddde3ba4aebc\Symfony\Component\Mime\MimeTypes::class), \E_USER_DEPRECATED);
/**
 * A singleton mime type to file extension guesser.
 *
 * A default guesser is provided.
 * You can register custom guessers by calling the register()
 * method on the singleton instance:
 *
 *     $guesser = ExtensionGuesser::getInstance();
 *     $guesser->register(new MyCustomExtensionGuesser());
 *
 * The last registered guesser is preferred over previously registered ones.
 *
 * @deprecated since Symfony 4.3, use {@link MimeTypes} instead
 */
class ExtensionGuesser implements \_PhpScoperddde3ba4aebc\Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesserInterface
{
    /**
     * The singleton instance.
     *
     * @var ExtensionGuesser
     */
    private static $instance = null;
    /**
     * All registered ExtensionGuesserInterface instances.
     *
     * @var array
     */
    protected $guessers = [];
    /**
     * Returns the singleton instance.
     *
     * @return self
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    /**
     * Registers all natively provided extension guessers.
     */
    private function __construct()
    {
        $this->register(new \_PhpScoperddde3ba4aebc\Symfony\Component\HttpFoundation\File\MimeType\MimeTypeExtensionGuesser());
    }
    /**
     * Registers a new extension guesser.
     *
     * When guessing, this guesser is preferred over previously registered ones.
     */
    public function register(\_PhpScoperddde3ba4aebc\Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesserInterface $guesser)
    {
        \array_unshift($this->guessers, $guesser);
    }
    /**
     * Tries to guess the extension.
     *
     * The mime type is passed to each registered mime type guesser in reverse order
     * of their registration (last registered is queried first). Once a guesser
     * returns a value that is not NULL, this method terminates and returns the
     * value.
     *
     * @param string $mimeType The mime type
     *
     * @return string The guessed extension or NULL, if none could be guessed
     */
    public function guess($mimeType)
    {
        foreach ($this->guessers as $guesser) {
            if (null !== ($extension = $guesser->guess($mimeType))) {
                return $extension;
            }
        }
        return null;
    }
}
