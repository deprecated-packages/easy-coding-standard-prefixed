<?php

namespace _PhpScopere015d8a3273c;

use _PhpScopere015d8a3273c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopere015d8a3273c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopere015d8a3273c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
