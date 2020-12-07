<?php

namespace _PhpScoper89ec3c69e67d;

use _PhpScoper89ec3c69e67d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper89ec3c69e67d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper89ec3c69e67d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
