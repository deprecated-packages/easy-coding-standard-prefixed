<?php

namespace _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations;

use _PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer;
class DocLexerTest extends \_PhpScoperb383f16e851e\PHPUnit_Framework_TestCase
{
    public function testMarkerAnnotation()
    {
        $lexer = new \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer();
        $lexer->setInput("@Name");
        $this->assertNull($lexer->token);
        $this->assertNull($lexer->lookahead);
        $this->assertTrue($lexer->moveNext());
        $this->assertNull($lexer->token);
        $this->assertEquals('@', $lexer->lookahead['value']);
        $this->assertTrue($lexer->moveNext());
        $this->assertEquals('@', $lexer->token['value']);
        $this->assertEquals('Name', $lexer->lookahead['value']);
        $this->assertFalse($lexer->moveNext());
    }
    public function testScannerTokenizesDocBlockWhitConstants()
    {
        $lexer = new \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer();
        $docblock = '@AnnotationWithConstants(PHP_EOL, ClassWithConstants::SOME_VALUE, ClassWithConstants::CONSTANT_, ClassWithConstants::CONST_ANT3, \\Doctrine\\Tests\\Common\\Annotations\\Fixtures\\IntefaceWithConstants::SOME_VALUE)';
        $tokens = array(array('value' => '@', 'position' => 0, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_AT), array('value' => 'AnnotationWithConstants', 'position' => 1, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => '(', 'position' => 24, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_OPEN_PARENTHESIS), array('value' => 'PHP_EOL', 'position' => 25, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => ',', 'position' => 32, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_COMMA), array('value' => 'ClassWithConstants::SOME_VALUE', 'position' => 34, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => ',', 'position' => 64, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_COMMA), array('value' => 'ClassWithConstants::CONSTANT_', 'position' => 66, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => ',', 'position' => 95, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_COMMA), array('value' => 'ClassWithConstants::CONST_ANT3', 'position' => 97, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => ',', 'position' => 127, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_COMMA), array('value' => '\\Doctrine\\Tests\\Common\\Annotations\\Fixtures\\IntefaceWithConstants::SOME_VALUE', 'position' => 129, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => ')', 'position' => 206, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_CLOSE_PARENTHESIS));
        $lexer->setInput($docblock);
        foreach ($tokens as $expected) {
            $lexer->moveNext();
            $lookahead = $lexer->lookahead;
            $this->assertEquals($expected['value'], $lookahead['value']);
            $this->assertEquals($expected['type'], $lookahead['type']);
            $this->assertEquals($expected['position'], $lookahead['position']);
        }
        $this->assertFalse($lexer->moveNext());
    }
    public function testScannerTokenizesDocBlockWhitInvalidIdentifier()
    {
        $lexer = new \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer();
        $docblock = '@Foo\\3.42';
        $tokens = array(array('value' => '@', 'position' => 0, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_AT), array('value' => 'Foo', 'position' => 1, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => '\\', 'position' => 4, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_NAMESPACE_SEPARATOR), array('value' => 3.42, 'position' => 5, 'type' => \_PhpScoperb383f16e851e\Doctrine\Common\Annotations\DocLexer::T_FLOAT));
        $lexer->setInput($docblock);
        foreach ($tokens as $expected) {
            $lexer->moveNext();
            $lookahead = $lexer->lookahead;
            $this->assertEquals($expected['value'], $lookahead['value']);
            $this->assertEquals($expected['type'], $lookahead['type']);
            $this->assertEquals($expected['position'], $lookahead['position']);
        }
        $this->assertFalse($lexer->moveNext());
    }
}