<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\NodeFactory\Service\ServicesPhpNodeFactory;
use _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     App\\: <--
 *          source: '../src'
 */
final class ResourceCaseConverter implements \_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ServicesPhpNodeFactory
     */
    private $servicesPhpNodeFactory;
    public function __construct(\_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\NodeFactory\Service\ServicesPhpNodeFactory $servicesPhpNodeFactory)
    {
        $this->servicesPhpNodeFactory = $servicesPhpNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoper49c742f5a4ee\PhpParser\Node\Stmt\Expression
    {
        // Due to the yaml behavior that does not allow the declaration of several identical key names.
        if (isset($values['namespace'])) {
            $key = $values['namespace'];
            unset($values['namespace']);
        }
        return $this->servicesPhpNodeFactory->createResource($key, $values);
    }
    public function match(string $rootKey, $key, $values) : bool
    {
        return isset($values[\_PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\ValueObject\YamlKey::RESOURCE]);
    }
}
