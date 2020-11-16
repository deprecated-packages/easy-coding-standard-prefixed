<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Printer;

use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeTraverser\ImportFullyQualifiedNamesNodeTraverser;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Printer\NodeDecorator\EmptyLineNodeDecorator;
use _PhpScoperedc2e0c967db\Nette\Utils\Strings;
use _PhpScoperedc2e0c967db\PhpParser\Node;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\Array_;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall;
use _PhpScoperedc2e0c967db\PhpParser\Node\Scalar\LNumber;
use _PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Declare_;
use _PhpScoperedc2e0c967db\PhpParser\Node\Stmt\DeclareDeclare;
use _PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Nop;
use _PhpScoperedc2e0c967db\PhpParser\PrettyPrinter\Standard;
final class PhpParserPhpConfigPrinter extends \_PhpScoperedc2e0c967db\PhpParser\PrettyPrinter\Standard
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
    public function __construct(\_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeTraverser\ImportFullyQualifiedNamesNodeTraverser $importFullyQualifiedNamesNodeTraverser, \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Printer\NodeDecorator\EmptyLineNodeDecorator $emptyLineNodeDecorator)
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
        $printedContent = \_PhpScoperedc2e0c967db\Nette\Utils\Strings::replace($printedContent, '#^[ ]+\\n#m', "\n");
        // remove space before " :" in main closure
        $printedContent = \_PhpScoperedc2e0c967db\Nette\Utils\Strings::replace($printedContent, '#\\) : void#', '): void');
        // remove space between declare strict types
        $printedContent = \_PhpScoperedc2e0c967db\Nette\Utils\Strings::replace($printedContent, '#declare \\(strict#', 'declare(strict');
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
        return "'" . \_PhpScoperedc2e0c967db\Nette\Utils\Strings::replace($string, "#'|\\\\(?=[\\\\']|\$)#", '\\\\$0') . "'";
    }
    protected function pExpr_Array(\_PhpScoperedc2e0c967db\PhpParser\Node\Expr\Array_ $array) : string
    {
        $array->setAttribute('kind', \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\Array_::KIND_SHORT);
        return parent::pExpr_Array($array);
    }
    protected function pExpr_MethodCall(\_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall $methodCall) : string
    {
        $printedMethodCall = parent::pExpr_MethodCall($methodCall);
        return $this->indentFluentCallToNewline($printedMethodCall);
    }
    private function indentFluentCallToNewline(string $content) : string
    {
        $nextCallIndentReplacement = ')' . \PHP_EOL . \_PhpScoperedc2e0c967db\Nette\Utils\Strings::indent('->', 8, ' ');
        return \_PhpScoperedc2e0c967db\Nette\Utils\Strings::replace($content, '#\\)->#', $nextCallIndentReplacement);
    }
    /**
     * @param Node[] $stmts
     * @return Node[]
     */
    private function prependStrictTypesDeclare(array $stmts) : array
    {
        $strictTypesDeclare = $this->createStrictTypesDeclare();
        return \array_merge([$strictTypesDeclare, new \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Nop()], $stmts);
    }
    private function createStrictTypesDeclare() : \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Declare_
    {
        $declareDeclare = new \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\DeclareDeclare('strict_types', new \_PhpScoperedc2e0c967db\PhpParser\Node\Scalar\LNumber(1));
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Declare_([$declareDeclare]);
    }
}
