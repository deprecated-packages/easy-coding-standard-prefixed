<?php

namespace _PhpScoperd4c5032f0671;

use _PhpScoperd4c5032f0671\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperd4c5032f0671\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperd4c5032f0671\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
