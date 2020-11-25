<?php

namespace _PhpScoperca8ca183ac38;

use _PhpScoperca8ca183ac38\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperca8ca183ac38\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperca8ca183ac38\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
