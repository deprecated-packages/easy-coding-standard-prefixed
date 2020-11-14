<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Printer;

use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeTraverser\ImportFullyQualifiedNamesNodeTraverser;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Printer\NodeDecorator\EmptyLineNodeDecorator;
use _PhpScoperb09c3ec8e01a\Nette\Utils\Strings;
use _PhpScoperb09c3ec8e01a\PhpParser\Node;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Array_;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Scalar\LNumber;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Declare_;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\DeclareDeclare;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Nop;
use _PhpScoperb09c3ec8e01a\PhpParser\PrettyPrinter\Standard;
final class PhpParserPhpConfigPrinter extends \_PhpScoperb09c3ec8e01a\PhpParser\PrettyPrinter\Standard
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
    public function __construct(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeTraverser\ImportFullyQualifiedNamesNodeTraverser $importFullyQualifiedNamesNodeTraverser, \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Printer\NodeDecorator\EmptyLineNodeDecorator $emptyLineNodeDecorator)
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
        $printedContent = \_PhpScoperb09c3ec8e01a\Nette\Utils\Strings::replace($printedContent, '#^[ ]+\\n#m', "\n");
        // remove space before " :" in main closure
        $printedContent = \_PhpScoperb09c3ec8e01a\Nette\Utils\Strings::replace($printedContent, '#\\) : void#', '): void');
        // remove space between declare strict types
        $printedContent = \_PhpScoperb09c3ec8e01a\Nette\Utils\Strings::replace($printedContent, '#declare \\(strict#', 'declare(strict');
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
        return "'" . \_PhpScoperb09c3ec8e01a\Nette\Utils\Strings::replace($string, "#'|\\\\(?=[\\\\']|\$)#", '\\\\$0') . "'";
    }
    protected function pExpr_Array(\_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Array_ $array) : string
    {
        $array->setAttribute('kind', \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\Array_::KIND_SHORT);
        return parent::pExpr_Array($array);
    }
    protected function pExpr_MethodCall(\_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall $methodCall) : string
    {
        $printedMethodCall = parent::pExpr_MethodCall($methodCall);
        return $this->indentFluentCallToNewline($printedMethodCall);
    }
    private function indentFluentCallToNewline(string $content) : string
    {
        $nextCallIndentReplacement = ')' . \PHP_EOL . \_PhpScoperb09c3ec8e01a\Nette\Utils\Strings::indent('->', 8, ' ');
        return \_PhpScoperb09c3ec8e01a\Nette\Utils\Strings::replace($content, '#\\)->#', $nextCallIndentReplacement);
    }
    /**
     * @param Node[] $stmts
     * @return Node[]
     */
    private function prependStrictTypesDeclare(array $stmts) : array
    {
        $strictTypesDeclare = $this->createStrictTypesDeclare();
        return \array_merge([$strictTypesDeclare, new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Nop()], $stmts);
    }
    private function createStrictTypesDeclare() : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Declare_
    {
        $declareDeclare = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\DeclareDeclare('strict_types', new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Scalar\LNumber(1));
        return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Declare_([$declareDeclare]);
    }
}
