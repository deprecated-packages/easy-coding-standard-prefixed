<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Printer;

use _PhpScoperac4e86be08e5\Nette\Utils\Strings;
use _PhpScoperac4e86be08e5\PhpParser\Node;
use _PhpScoperac4e86be08e5\PhpParser\Node\Expr\Array_;
use _PhpScoperac4e86be08e5\PhpParser\Node\Expr\MethodCall;
use _PhpScoperac4e86be08e5\PhpParser\Node\Scalar\LNumber;
use _PhpScoperac4e86be08e5\PhpParser\Node\Stmt\Declare_;
use _PhpScoperac4e86be08e5\PhpParser\Node\Stmt\DeclareDeclare;
use _PhpScoperac4e86be08e5\PhpParser\Node\Stmt\Nop;
use _PhpScoperac4e86be08e5\PhpParser\PrettyPrinter\Standard;
use Symplify\PhpConfigPrinter\NodeTraverser\ImportFullyQualifiedNamesNodeTraverser;
use Symplify\PhpConfigPrinter\Printer\NodeDecorator\EmptyLineNodeDecorator;
final class PhpParserPhpConfigPrinter extends \_PhpScoperac4e86be08e5\PhpParser\PrettyPrinter\Standard
{
    /**
     * @see https://regex101.com/r/qYtAPy/1
     * @var string
     */
    private const QUOTE_SLASH_REGEX = "#'|\\\\(?=[\\\\']|\$)#";
    /**
     * @see https://regex101.com/r/u0iUrM/1
     * @var string
     */
    private const START_WITH_SPACE_REGEX = '#^[ ]+\\n#m';
    /**
     * @see https://regex101.com/r/jJc7n3/1
     * @var string
     */
    private const VOID_AFTER_FUNC_REGEX = '#\\) : void#';
    /**
     * @var string
     */
    private const KIND = 'kind';
    /**
     * @see https://regex101.com/r/YYTPz6/1
     * @var string
     */
    private const DECLARE_SPACE_STRICT_REGEX = '#declare \\(strict#';
    /**
     * @var ImportFullyQualifiedNamesNodeTraverser
     */
    private $importFullyQualifiedNamesNodeTraverser;
    /**
     * @var EmptyLineNodeDecorator
     */
    private $emptyLineNodeDecorator;
    public function __construct(\Symplify\PhpConfigPrinter\NodeTraverser\ImportFullyQualifiedNamesNodeTraverser $importFullyQualifiedNamesNodeTraverser, \Symplify\PhpConfigPrinter\Printer\NodeDecorator\EmptyLineNodeDecorator $emptyLineNodeDecorator)
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
        $printedContent = \_PhpScoperac4e86be08e5\Nette\Utils\Strings::replace($printedContent, self::START_WITH_SPACE_REGEX, "\n");
        // remove space before " :" in main closure
        $printedContent = \_PhpScoperac4e86be08e5\Nette\Utils\Strings::replace($printedContent, self::VOID_AFTER_FUNC_REGEX, '): void');
        // remove space between declare strict types
        $printedContent = \_PhpScoperac4e86be08e5\Nette\Utils\Strings::replace($printedContent, self::DECLARE_SPACE_STRICT_REGEX, 'declare(strict');
        return $printedContent . \PHP_EOL;
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
        return "'" . \_PhpScoperac4e86be08e5\Nette\Utils\Strings::replace($string, self::QUOTE_SLASH_REGEX, '\\\\$0') . "'";
    }
    protected function pExpr_Array(\_PhpScoperac4e86be08e5\PhpParser\Node\Expr\Array_ $array) : string
    {
        $array->setAttribute(self::KIND, \_PhpScoperac4e86be08e5\PhpParser\Node\Expr\Array_::KIND_SHORT);
        return parent::pExpr_Array($array);
    }
    protected function pExpr_MethodCall(\_PhpScoperac4e86be08e5\PhpParser\Node\Expr\MethodCall $methodCall) : string
    {
        $printedMethodCall = parent::pExpr_MethodCall($methodCall);
        return $this->indentFluentCallToNewline($printedMethodCall);
    }
    private function indentFluentCallToNewline(string $content) : string
    {
        $nextCallIndentReplacement = ')' . \PHP_EOL . \_PhpScoperac4e86be08e5\Nette\Utils\Strings::indent('->', 8, ' ');
        return \_PhpScoperac4e86be08e5\Nette\Utils\Strings::replace($content, '#\\)->#', $nextCallIndentReplacement);
    }
    /**
     * @param Node[] $stmts
     * @return Node[]
     */
    private function prependStrictTypesDeclare(array $stmts) : array
    {
        $strictTypesDeclare = $this->createStrictTypesDeclare();
        return \array_merge([$strictTypesDeclare, new \_PhpScoperac4e86be08e5\PhpParser\Node\Stmt\Nop()], $stmts);
    }
    private function createStrictTypesDeclare() : \_PhpScoperac4e86be08e5\PhpParser\Node\Stmt\Declare_
    {
        $declareDeclare = new \_PhpScoperac4e86be08e5\PhpParser\Node\Stmt\DeclareDeclare('strict_types', new \_PhpScoperac4e86be08e5\PhpParser\Node\Scalar\LNumber(1));
        return new \_PhpScoperac4e86be08e5\PhpParser\Node\Stmt\Declare_([$declareDeclare]);
    }
}
