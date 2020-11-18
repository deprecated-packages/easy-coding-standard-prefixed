<?php

namespace _PhpScoper0270f1d35181;

use _PhpScoper0270f1d35181\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper0270f1d35181\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper0270f1d35181\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
