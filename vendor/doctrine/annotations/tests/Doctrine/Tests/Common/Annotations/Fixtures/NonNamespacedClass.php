<?php

namespace _PhpScopercf909b66eba8;

use _PhpScopercf909b66eba8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopercf909b66eba8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopercf909b66eba8\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
