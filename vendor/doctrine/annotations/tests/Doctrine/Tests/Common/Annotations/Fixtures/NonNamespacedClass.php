<?php

namespace _PhpScoper578a67c80b2b;

use _PhpScoper578a67c80b2b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper578a67c80b2b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper578a67c80b2b\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
