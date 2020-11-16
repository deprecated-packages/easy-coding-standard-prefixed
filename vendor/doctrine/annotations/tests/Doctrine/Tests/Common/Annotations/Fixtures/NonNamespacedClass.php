<?php

namespace _PhpScoper6207116d4311;

use _PhpScoper6207116d4311\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper6207116d4311\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper6207116d4311\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
