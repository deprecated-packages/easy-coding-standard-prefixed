<?php

namespace _PhpScoperedc2e0c967db;

use _PhpScoperedc2e0c967db\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperedc2e0c967db\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperedc2e0c967db\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
