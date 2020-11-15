<?php

namespace _PhpScoperd9c3b46af121;

use _PhpScoperd9c3b46af121\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperd9c3b46af121\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperd9c3b46af121\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
