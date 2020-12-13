<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperd3d57724c802\Nette\Utils;

use _PhpScoperd3d57724c802\Nette;
/**
 * Nette\Object behaviour mixin.
 * @deprecated
 */
final class ObjectMixin
{
    use Nette\StaticClass;
    /**
     * @deprecated  use ObjectHelpers::getSuggestion()
     */
    public static function getSuggestion(array $possibilities, string $value) : ?string
    {
        \trigger_error(__METHOD__ . '() has been renamed to Nette\\Utils\\ObjectHelpers::getSuggestion()', \E_USER_DEPRECATED);
        return \_PhpScoperd3d57724c802\Nette\Utils\ObjectHelpers::getSuggestion($possibilities, $value);
    }
    public static function setExtensionMethod($class, $name, $callback)
    {
        \trigger_error('Class Nette\\Utils\\ObjectMixin is deprecated', \E_USER_DEPRECATED);
    }
    public static function getExtensionMethod($class, $name)
    {
        \trigger_error('Class Nette\\Utils\\ObjectMixin is deprecated', \E_USER_DEPRECATED);
    }
}
