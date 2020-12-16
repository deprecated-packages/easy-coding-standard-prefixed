<?php

namespace _PhpScoperd35c27cd4b09;

use _PhpScoperd35c27cd4b09\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperd35c27cd4b09\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperd35c27cd4b09\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
