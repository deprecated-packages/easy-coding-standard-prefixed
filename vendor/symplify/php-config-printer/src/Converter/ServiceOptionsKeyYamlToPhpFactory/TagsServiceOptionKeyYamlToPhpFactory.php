<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Converter\ServiceOptionsKeyYamlToPhpFactory;

use _PhpScoperd3d57724c802\PhpParser\BuilderHelpers;
use _PhpScoperd3d57724c802\PhpParser\Node\Arg;
use _PhpScoperd3d57724c802\PhpParser\Node\Expr\MethodCall;
use _PhpScoperd3d57724c802\PhpParser\Node\Scalar\String_;
use Symplify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface;
use Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory;
use Symplify\PhpConfigPrinter\ValueObject\YamlServiceKey;
final class TagsServiceOptionKeyYamlToPhpFactory implements \Symplify\PhpConfigPrinter\Contract\Converter\ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @var string
     */
    private const TAG = 'tag';
    /**
     * @var ArgsNodeFactory
     */
    private $argsNodeFactory;
    public function __construct(\Symplify\PhpConfigPrinter\NodeFactory\ArgsNodeFactory $argsNodeFactory)
    {
        $this->argsNodeFactory = $argsNodeFactory;
    }
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperd3d57724c802\PhpParser\Node\Expr\MethodCall $methodCall) : \_PhpScoperd3d57724c802\PhpParser\Node\Expr\MethodCall
    {
        /** @var mixed[] $yaml */
        if (\count($yaml) === 1 && \is_string($yaml[0])) {
            $string = new \_PhpScoperd3d57724c802\PhpParser\Node\Scalar\String_($yaml[0]);
            return new \_PhpScoperd3d57724c802\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, [new \_PhpScoperd3d57724c802\PhpParser\Node\Arg($string)]);
        }
        foreach ($yaml as $singleValue) {
            $args = [];
            foreach ($singleValue as $singleNestedKey => $singleNestedValue) {
                if ($singleNestedKey === 'name') {
                    $args[] = new \_PhpScoperd3d57724c802\PhpParser\Node\Arg(\_PhpScoperd3d57724c802\PhpParser\BuilderHelpers::normalizeValue($singleNestedValue));
                    unset($singleValue[$singleNestedKey]);
                }
            }
            $restArgs = $this->argsNodeFactory->createFromValuesAndWrapInArray($singleValue);
            $args = \array_merge($args, $restArgs);
            $methodCall = new \_PhpScoperd3d57724c802\PhpParser\Node\Expr\MethodCall($methodCall, self::TAG, $args);
        }
        return $methodCall;
    }
    public function isMatch($key, $values) : bool
    {
        return $key === \Symplify\PhpConfigPrinter\ValueObject\YamlServiceKey::TAGS;
    }
}
