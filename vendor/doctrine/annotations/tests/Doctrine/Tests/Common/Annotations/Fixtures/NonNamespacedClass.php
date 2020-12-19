<?php

namespace _PhpScoperd1a5bf00e83e;

use _PhpScoperd1a5bf00e83e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperd1a5bf00e83e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperd1a5bf00e83e\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
