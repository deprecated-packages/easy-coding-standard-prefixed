<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\CaseConverter;

use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\NodeFactory\Service\ServicesPhpNodeFactory;
use _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperad4b7e2c09d8\PhpParser\Node\Stmt\Expression;
/**
 * Handles this part:
 *
 * services:
 *     App\\: <--
 *          source: '../src'
 */
final class ResourceCaseConverter implements \_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Contract\CaseConverterInterface
{
    /**
     * @var ServicesPhpNodeFactory
     */
    private $servicesPhpNodeFactory;
    public function __construct(\_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\NodeFactory\Service\ServicesPhpNodeFactory $servicesPhpNodeFactory)
    {
        $this->servicesPhpNodeFactory = $servicesPhpNodeFactory;
    }
    public function convertToMethodCall($key, $values) : \_PhpScoperad4b7e2c09d8\PhpParser\Node\Stmt\Expression
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
        return isset($values[\_PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\ValueObject\YamlKey::RESOURCE]);
    }
}
