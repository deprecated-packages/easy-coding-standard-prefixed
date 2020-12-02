<?php

namespace _PhpScoperfaaf57618f34;

use _PhpScoperfaaf57618f34\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperfaaf57618f34\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperfaaf57618f34\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
