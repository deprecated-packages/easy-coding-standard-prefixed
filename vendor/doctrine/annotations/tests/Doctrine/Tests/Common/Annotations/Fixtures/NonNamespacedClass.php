<?php

namespace _PhpScoper0f5cd390c37a;

use _PhpScoper0f5cd390c37a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper0f5cd390c37a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper0f5cd390c37a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
