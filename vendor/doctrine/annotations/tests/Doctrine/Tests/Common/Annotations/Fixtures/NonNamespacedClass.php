<?php

namespace _PhpScoper4298f97f3cb3;

use _PhpScoper4298f97f3cb3\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper4298f97f3cb3\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper4298f97f3cb3\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
