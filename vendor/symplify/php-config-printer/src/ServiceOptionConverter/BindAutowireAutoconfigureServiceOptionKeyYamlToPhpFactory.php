<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\ServiceOptionConverter;

use _PhpScoperb6a8e65b492c\PhpParser\Node\Arg;
use _PhpScoperb6a8e65b492c\PhpParser\Node\Expr\MethodCall;
use Symplify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use Symplify\PhpConfigPrinter\NodeFactory\CommonNodeFactory;
use Symplify\PhpConfigPrinter\ValueObject\YamlKey;
use Symplify\PhpConfigPrinter\ValueObject\YamlServiceKey;
final class BindAutowireAutoconfigureServiceOptionKeyYamlToPhpFactory implements \Symplify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var CommonNodeFactory
     */
    private $commonNodeFactory;
    public function __construct(\Symplify\PhpConfigPrinter\NodeFactory\CommonNodeFactory $commonNodeFactory)
    {
        $this->commonNodeFactory = $commonNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperb6a8e65b492c\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperb6a8e65b492c\PhpParser\Node\Expr\MethodCall
    {
        $method = $key;
        if ($key === 'shared') {
            $method = 'share';
        }
        $methodCall = new \_PhpScoperb6a8e65b492c\PhpParser\Node\Expr\MethodCall($methodCall, $method);
        if ($yaml === \false) {
            $methodCall->args[] = new \_PhpScoperb6a8e65b492c\PhpParser\Node\Arg($this->commonNodeFactory->createFalse());
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return \in_array($key, [\Symplify\PhpConfigPrinter\ValueObject\YamlServiceKey::BIND, \Symplify\PhpConfigPrinter\ValueObject\YamlKey::AUTOWIRE, \Symplify\PhpConfigPrinter\ValueObject\YamlKey::AUTOCONFIGURE], \true);
    }
}
