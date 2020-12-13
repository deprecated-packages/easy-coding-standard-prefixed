<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802\PhpParser\ErrorHandler;

use _PhpScoperd3d57724c802\PhpParser\Error;
use _PhpScoperd3d57724c802\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements \_PhpScoperd3d57724c802\PhpParser\ErrorHandler
{
    public function handleError(\_PhpScoperd3d57724c802\PhpParser\Error $error)
    {
        throw $error;
    }
}
