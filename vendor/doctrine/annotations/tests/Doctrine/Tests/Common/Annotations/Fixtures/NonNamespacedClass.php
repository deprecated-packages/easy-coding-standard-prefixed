<?php

namespace _PhpScoper11a6395266c4;

use _PhpScoper11a6395266c4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper11a6395266c4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper11a6395266c4\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
