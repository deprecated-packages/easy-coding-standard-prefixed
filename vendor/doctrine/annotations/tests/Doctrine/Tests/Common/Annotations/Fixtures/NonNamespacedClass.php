<?php

namespace _PhpScoper592524ba34f0;

use _PhpScoper592524ba34f0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper592524ba34f0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @Route("foo")
 * @Template
 */
class AnnotationsTestsFixturesNonNamespacedClass
{
}
/**
 * @Route("foo")
 * @Template
 */
\class_alias('_PhpScoper592524ba34f0\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
