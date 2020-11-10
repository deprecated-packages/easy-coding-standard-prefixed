<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Printer;

use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\NodeTraverser\ImportFullyQualifiedNamesNodeTraverser;
use _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Printer\NodeDecorator\EmptyLineNodeDecorator;
use _PhpScopere5e7dca8c031\Nette\Utils\Strings;
use _PhpScopere5e7dca8c031\PhpParser\Node;
use _PhpScopere5e7dca8c031\PhpParser\Node\Expr\Array_;
use _PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall;
use _PhpScopere5e7dca8c031\PhpParser\Node\Scalar\LNumber;
use _PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Declare_;
use _PhpScopere5e7dca8c031\PhpParser\Node\Stmt\DeclareDeclare;
use _PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Nop;
use _PhpScopere5e7dca8c031\PhpParser\PrettyPrinter\Standard;
final class PhpParserPhpConfigPrinter extends \_PhpScopere5e7dca8c031\PhpParser\PrettyPrinter\Standard
{
    /**
     * @var string
     */
    private const EOL_CHAR = "\n";
    /**
     * @var ImportFullyQualifiedNamesNodeTraverser
     */
    private $importFullyQualifiedNamesNodeTraverser;
    /**
     * @var EmptyLineNodeDecorator
     */
    private $emptyLineNodeDecorator;
    public function __construct(\_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\NodeTraverser\ImportFullyQualifiedNamesNodeTraverser $importFullyQualifiedNamesNodeTraverser, \_PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Printer\NodeDecorator\EmptyLineNodeDecorator $emptyLineNodeDecorator)
    {
        $this->importFullyQualifiedNamesNodeTraverser = $importFullyQualifiedNamesNodeTraverser;
        $this->emptyLineNodeDecorator = $emptyLineNodeDecorator;
        parent::__construct();
    }
    public function prettyPrintFile(array $stmts) : string
    {
        $stmts = $this->importFullyQualifiedNamesNodeTraverser->traverseNodes($stmts);
        $this->emptyLineNodeDecorator->decorate($stmts);
        // adds "declare(strict_types=1);" to every file
        $stmts = $this->prependStrictTypesDeclare($stmts);
        $printedContent = parent::prettyPrintFile($stmts);
        // remove trailing spaces
        $printedContent = \_PhpScopere5e7dca8c031\Nette\Utils\Strings::replace($printedContent, '#^[ ]+\\n#m', "\n");
        // remove space before " :" in main closure
        $printedContent = \_PhpScopere5e7dca8c031\Nette\Utils\Strings::replace($printedContent, '#\\) : void#', '): void');
        // remove space between declare strict types
        $printedContent = \_PhpScopere5e7dca8c031\Nette\Utils\Strings::replace($printedContent, '#declare \\(strict#', 'declare(strict');
        return $printedContent . self::EOL_CHAR;
    }
    /**
     * Do not preslash all slashes (parent behavior), but only those:
     *
     * - followed by "\"
     * - by "'"
     * - or the end of the string
     *
     * Prevents `Vendor\Class` => `Vendor\\Class`.
     */
    protected function pSingleQuotedString(string $string) : string
    {
        return "'" . \_PhpScopere5e7dca8c031\Nette\Utils\Strings::replace($string, "#'|\\\\(?=[\\\\']|\$)#", '\\\\$0') . "'";
    }
    protected function pExpr_Array(\_PhpScopere5e7dca8c031\PhpParser\Node\Expr\Array_ $array) : string
    {
        $array->setAttribute('kind', \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\Array_::KIND_SHORT);
        return parent::pExpr_Array($array);
    }
    protected function pExpr_MethodCall(\_PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall $methodCall) : string
    {
        $printedMethodCall = parent::pExpr_MethodCall($methodCall);
        return $this->indentFluentCallToNewline($printedMethodCall);
    }
    private function indentFluentCallToNewline(string $content) : string
    {
        $nextCallIndentReplacement = ')' . \PHP_EOL . \_PhpScopere5e7dca8c031\Nette\Utils\Strings::indent('->', 8, ' ');
        return \_PhpScopere5e7dca8c031\Nette\Utils\Strings::replace($content, '#\\)->#', $nextCallIndentReplacement);
    }
    /**
     * @param Node[] $stmts
     * @return Node[]
     */
    private function prependStrictTypesDeclare(array $stmts) : array
    {
        $strictTypesDeclare = $this->createStrictTypesDeclare();
        return \array_merge([$strictTypesDeclare, new \_PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Nop()], $stmts);
    }
    private function createStrictTypesDeclare() : \_PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Declare_
    {
        $declareDeclare = new \_PhpScopere5e7dca8c031\PhpParser\Node\Stmt\DeclareDeclare('strict_types', new \_PhpScopere5e7dca8c031\PhpParser\Node\Scalar\LNumber(1));
        return new \_PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Declare_([$declareDeclare]);
    }
}
