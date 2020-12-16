<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PhpParser\Node;

/**
 * Represents a name that is written in source code with a leading dollar,
 * but is not a proper variable. The leading dollar is not stored as part of the name.
 *
 * Examples: Names in property declarations are formatted as variables. Names in static property
 * lookups are also formatted as variables.
 */
class VarLikeIdentifier extends \_PhpScoperc75fd40d7a6e\PhpParser\Node\Identifier
{
    public function getType() : string
    {
        return 'VarLikeIdentifier';
    }
}
