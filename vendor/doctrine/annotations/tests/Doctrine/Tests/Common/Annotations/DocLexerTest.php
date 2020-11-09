<?php

namespace _PhpScoper0d0ee1ba46d4\Doctrine\Tests\Common\Annotations;

use _PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer;
class DocLexerTest extends \_PhpScoper0d0ee1ba46d4\PHPUnit_Framework_TestCase
{
    public function testMarkerAnnotation()
    {
        $lexer = new \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer();
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
        $lexer = new \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer();
        $docblock = '@AnnotationWithConstants(PHP_EOL, ClassWithConstants::SOME_VALUE, ClassWithConstants::CONSTANT_, ClassWithConstants::CONST_ANT3, \\Doctrine\\Tests\\Common\\Annotations\\Fixtures\\IntefaceWithConstants::SOME_VALUE)';
        $tokens = array(array('value' => '@', 'position' => 0, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_AT), array('value' => 'AnnotationWithConstants', 'position' => 1, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => '(', 'position' => 24, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_OPEN_PARENTHESIS), array('value' => 'PHP_EOL', 'position' => 25, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => ',', 'position' => 32, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_COMMA), array('value' => 'ClassWithConstants::SOME_VALUE', 'position' => 34, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => ',', 'position' => 64, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_COMMA), array('value' => 'ClassWithConstants::CONSTANT_', 'position' => 66, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => ',', 'position' => 95, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_COMMA), array('value' => 'ClassWithConstants::CONST_ANT3', 'position' => 97, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => ',', 'position' => 127, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_COMMA), array('value' => '\\Doctrine\\Tests\\Common\\Annotations\\Fixtures\\IntefaceWithConstants::SOME_VALUE', 'position' => 129, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => ')', 'position' => 206, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_CLOSE_PARENTHESIS));
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
        $lexer = new \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer();
        $docblock = '@Foo\\3.42';
        $tokens = array(array('value' => '@', 'position' => 0, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_AT), array('value' => 'Foo', 'position' => 1, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_IDENTIFIER), array('value' => '\\', 'position' => 4, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_NAMESPACE_SEPARATOR), array('value' => 3.42, 'position' => 5, 'type' => \_PhpScoper0d0ee1ba46d4\Doctrine\Common\Annotations\DocLexer::T_FLOAT));
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
