<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfacc742d2745\Symfony\Component\Mime\Tests\DependencyInjection;

use _PhpScoperfacc742d2745\PHPUnit\Framework\TestCase;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Reference;
use _PhpScoperfacc742d2745\Symfony\Component\Mime\DependencyInjection\AddMimeTypeGuesserPass;
use _PhpScoperfacc742d2745\Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use _PhpScoperfacc742d2745\Symfony\Component\Mime\MimeTypes;
class AddMimeTypeGuesserPassTest extends \_PhpScoperfacc742d2745\PHPUnit\Framework\TestCase
{
    public function testTags()
    {
        $container = new \_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\ContainerBuilder();
        $container->addCompilerPass(new \_PhpScoperfacc742d2745\Symfony\Component\Mime\DependencyInjection\AddMimeTypeGuesserPass());
        $definition = new \_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Definition(\_PhpScoperfacc742d2745\Symfony\Component\Mime\FileinfoMimeTypeGuesser::class);
        $definition->addArgument('/path/to/magic/file');
        $definition->addTag('mime.mime_type_guesser');
        $container->setDefinition('some_mime_type_guesser', $definition->setPublic(\true));
        $container->register('mime_types', \_PhpScoperfacc742d2745\Symfony\Component\Mime\MimeTypes::class)->setPublic(\true);
        $container->compile();
        $router = $container->getDefinition('mime_types');
        $calls = $router->getMethodCalls();
        $this->assertCount(1, $calls);
        $this->assertEquals('registerGuesser', $calls[0][0]);
        $this->assertEquals(new \_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\Reference('some_mime_type_guesser'), $calls[0][1][0]);
    }
}
