<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\Service;

use _PhpScoperedc2e0c967db\Migrify\ConfigTransformer\ValueObject\SymfonyVersionFeature;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Converter\ServiceOptionsKeyYamlToPhpFactory\TagsServiceOptionKeyYamlToPhpFactory;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey;
use _PhpScoperedc2e0c967db\PhpParser\Node\Arg;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall;
final class AutoBindNodeFactory
{
    /**
     * @var string
     */
    public const TYPE_SERVICE = 'service';
    /**
     * @var string
     */
    public const TYPE_DEFAULTS = 'defaults';
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    /**
     * @var SymfonyVersionFeatureGuardInterface
     */
    private $symfonyVersionFeatureGuard;
    /**
     * @var TagsServiceOptionKeyYamlToPhpFactory
     */
    private $tagsServiceOptionKeyYamlToPhpFactory;
    public function __construct(\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface $symfonyVersionFeatureGuard, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Converter\ServiceOptionsKeyYamlToPhpFactory\TagsServiceOptionKeyYamlToPhpFactory $tagsServiceOptionKeyYamlToPhpFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
        $this->argsNodeFactory = $argsNodeFactory;
        $this->symfonyVersionFeatureGuard = $symfonyVersionFeatureGuard;
        $this->tagsServiceOptionKeyYamlToPhpFactory = $tagsServiceOptionKeyYamlToPhpFactory;
    }
    /**
     * Decorated node with:
     * ->autowire()
     * ->autoconfigure()
     * ->bind()
     */
    public function createAutoBindCalls(array $yaml, \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall $methodCall, string $type) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall
    {
        foreach ($yaml as $key => $value) {
            if ($key === \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE) {
                $methodCall = $this->createAutowire($value, $methodCall, $type);
            }
            if ($key === \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE) {
                $methodCall = $this->createAutoconfigure($value, $methodCall, $type);
            }
            if ($key === \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey::PUBLIC) {
                $methodCall = $this->createPublicPrivate($value, $methodCall, $type);
            }
            if ($key === \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey::BIND) {
                $methodCall = $this->createBindMethodCall($methodCall, $yaml[\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey::BIND]);
            }
            if ($key === \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey::TAGS) {
                $methodCall = $this->createTagsMethodCall($methodCall, $value);
            }
        }
        return $methodCall;
    }
    private function createBindMethodCall(\_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall $methodCall, array $bindValues) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall
    {
        foreach ($bindValues as $key => $value) {
            $args = $this->argsNodeFactory->createFromValues([$key, $value]);
            $methodCall = new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($methodCall, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey::BIND, $args);
        }
        return $methodCall;
    }
    private function createAutowire($value, \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall $methodCall, string $type) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall
    {
        if ($value === \true) {
            return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($methodCall, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE);
        }
        // skip default false
        if ($type === self::TYPE_DEFAULTS) {
            return $methodCall;
        }
        $args = [new \_PhpScoperedc2e0c967db\PhpParser\Node\Arg($this->commonNodeFactory->createFalse())];
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($methodCall, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, $args);
    }
    private function createAutoconfigure($value, \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall $methodCall, string $type)
    {
        if ($value === \true) {
            return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($methodCall, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE);
        }
        // skip default false
        if ($type === self::TYPE_DEFAULTS) {
            return $methodCall;
        }
        $args = [new \_PhpScoperedc2e0c967db\PhpParser\Node\Arg($this->commonNodeFactory->createFalse())];
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($methodCall, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE, $args);
    }
    private function createPublicPrivate($value, \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall $methodCall, string $type) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall
    {
        if ($value !== \false) {
            return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($methodCall, 'public');
        }
        // default value
        if ($type === self::TYPE_DEFAULTS) {
            if ($this->symfonyVersionFeatureGuard->isAtLeastSymfonyVersion(\_PhpScoperedc2e0c967db\Migrify\ConfigTransformer\ValueObject\SymfonyVersionFeature::PRIVATE_SERVICES_BY_DEFAULT)) {
                return $methodCall;
            }
            return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($methodCall, 'private');
        }
        $args = [new \_PhpScoperedc2e0c967db\PhpParser\Node\Arg($this->commonNodeFactory->createFalse())];
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall($methodCall, 'public', $args);
    }
    private function createTagsMethodCall(\_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall $methodCall, $value) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall
    {
        return $this->tagsServiceOptionKeyYamlToPhpFactory->decorateServiceMethodCall(null, $value, [], $methodCall);
    }
}
