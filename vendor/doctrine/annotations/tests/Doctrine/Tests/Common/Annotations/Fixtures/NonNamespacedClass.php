<?php

namespace _PhpScoperd675aaf00c76;

use _PhpScoperd675aaf00c76\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperd675aaf00c76\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperd675aaf00c76\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
