<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper04022cd986ec\Nette;

use _PhpScoper04022cd986ec\Nette\Utils\ObjectHelpers;
/**
 * Strict class for better experience.
 * - 'did you mean' hints
 * - access to undeclared members throws exceptions
 * - support for @property annotations
 * - support for calling event handlers stored in $onEvent via onEvent()
 */
trait SmartObject
{
    /**
     * @throws MemberAccessException
     */
    public function __call(string $name, array $args)
    {
        $class = \get_class($this);
        if (\_PhpScoper04022cd986ec\Nette\Utils\ObjectHelpers::hasProperty($class, $name) === 'event') {
            // calling event handlers
            if (\is_iterable($this->{$name})) {
                foreach ($this->{$name} as $handler) {
                    $handler(...$args);
                }
            } elseif ($this->{$name} !== null) {
                throw new \_PhpScoper04022cd986ec\Nette\UnexpectedValueException("Property {$class}::\${$name} must be iterable or null, " . \gettype($this->{$name}) . ' given.');
            }
        } else {
            \_PhpScoper04022cd986ec\Nette\Utils\ObjectHelpers::strictCall($class, $name);
        }
    }
    /**
     * @throws MemberAccessException
     */
    public static function __callStatic(string $name, array $args)
    {
        \_PhpScoper04022cd986ec\Nette\Utils\ObjectHelpers::strictStaticCall(static::class, $name);
    }
    /**
     * @return mixed
     * @throws MemberAccessException if the property is not defined.
     */
    public function &__get(string $name)
    {
        $class = \get_class($this);
        if ($prop = \_PhpScoper04022cd986ec\Nette\Utils\ObjectHelpers::getMagicProperties($class)[$name] ?? null) {
            // property getter
            if (!($prop & 0b1)) {
                throw new \_PhpScoper04022cd986ec\Nette\MemberAccessException("Cannot read a write-only property {$class}::\${$name}.");
            }
            $m = ($prop & 0b10 ? 'get' : 'is') . $name;
            if ($prop & 0b100) {
                // return by reference
                return $this->{$m}();
            } else {
                $val = $this->{$m}();
                return $val;
            }
        } else {
            \_PhpScoper04022cd986ec\Nette\Utils\ObjectHelpers::strictGet($class, $name);
        }
    }
    /**
     * @return void
     * @throws MemberAccessException if the property is not defined or is read-only
     */
    public function __set(string $name, $value)
    {
        $class = \get_class($this);
        if (\_PhpScoper04022cd986ec\Nette\Utils\ObjectHelpers::hasProperty($class, $name)) {
            // unsetted property
            $this->{$name} = $value;
        } elseif ($prop = \_PhpScoper04022cd986ec\Nette\Utils\ObjectHelpers::getMagicProperties($class)[$name] ?? null) {
            // property setter
            if (!($prop & 0b1000)) {
                throw new \_PhpScoper04022cd986ec\Nette\MemberAccessException("Cannot write to a read-only property {$class}::\${$name}.");
            }
            $this->{'set' . $name}($value);
        } else {
            \_PhpScoper04022cd986ec\Nette\Utils\ObjectHelpers::strictSet($class, $name);
        }
    }
    /**
     * @return void
     * @throws MemberAccessException
     */
    public function __unset(string $name)
    {
        $class = \get_class($this);
        if (!\_PhpScoper04022cd986ec\Nette\Utils\ObjectHelpers::hasProperty($class, $name)) {
            throw new \_PhpScoper04022cd986ec\Nette\MemberAccessException("Cannot unset the property {$class}::\${$name}.");
        }
    }
    public function __isset(string $name) : bool
    {
        return isset(\_PhpScoper04022cd986ec\Nette\Utils\ObjectHelpers::getMagicProperties(\get_class($this))[$name]);
    }
}
