<?php

namespace _PhpScopere205696a9dd6;

use _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopere205696a9dd6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopere205696a9dd6\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
