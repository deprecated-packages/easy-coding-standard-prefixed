<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper59558822d8c7\Symfony\Component\Mime\Part\Multipart;

use _PhpScoper59558822d8c7\Symfony\Component\Mime\Exception\InvalidArgumentException;
use _PhpScoper59558822d8c7\Symfony\Component\Mime\Part\AbstractMultipartPart;
use _PhpScoper59558822d8c7\Symfony\Component\Mime\Part\DataPart;
use _PhpScoper59558822d8c7\Symfony\Component\Mime\Part\TextPart;
/**
 * Implements RFC 7578.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class FormDataPart extends \_PhpScoper59558822d8c7\Symfony\Component\Mime\Part\AbstractMultipartPart
{
    private $fields = [];
    /**
     * @param (string|array|DataPart)[] $fields
     */
    public function __construct(array $fields = [])
    {
        parent::__construct();
        foreach ($fields as $name => $value) {
            if (!\is_string($value) && !\is_array($value) && !$value instanceof \_PhpScoper59558822d8c7\Symfony\Component\Mime\Part\TextPart) {
                throw new \_PhpScoper59558822d8c7\Symfony\Component\Mime\Exception\InvalidArgumentException(\sprintf('A form field value can only be a string, an array, or an instance of TextPart ("%s" given).', \is_object($value) ? \get_class($value) : \gettype($value)));
            }
            $this->fields[$name] = $value;
        }
        // HTTP does not support \r\n in header values
        $this->getHeaders()->setMaxLineLength(\PHP_INT_MAX);
    }
    public function getMediaSubtype() : string
    {
        return 'form-data';
    }
    public function getParts() : array
    {
        return $this->prepareFields($this->fields);
    }
    private function prepareFields(array $fields) : array
    {
        $values = [];
        \array_walk_recursive($fields, function ($item, $key) use(&$values) {
            if (!\is_array($item)) {
                $values[] = $this->preparePart($key, $item);
            }
        });
        return $values;
    }
    private function preparePart($name, $value) : \_PhpScoper59558822d8c7\Symfony\Component\Mime\Part\TextPart
    {
        if (\is_string($value)) {
            return $this->configurePart($name, new \_PhpScoper59558822d8c7\Symfony\Component\Mime\Part\TextPart($value, 'utf-8', 'plain', '8bit'));
        }
        return $this->configurePart($name, $value);
    }
    private function configurePart(string $name, \_PhpScoper59558822d8c7\Symfony\Component\Mime\Part\TextPart $part) : \_PhpScoper59558822d8c7\Symfony\Component\Mime\Part\TextPart
    {
        static $r;
        if (null === $r) {
            $r = new \ReflectionProperty(\_PhpScoper59558822d8c7\Symfony\Component\Mime\Part\TextPart::class, 'encoding');
            $r->setAccessible(\true);
        }
        $part->setDisposition('form-data');
        $part->setName($name);
        // HTTP does not support \r\n in header values
        $part->getHeaders()->setMaxLineLength(\PHP_INT_MAX);
        $r->setValue($part, '8bit');
        return $part;
    }
}
