<?php

namespace _PhpScoperdf15f2b748e9;

use _PhpScoperdf15f2b748e9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperdf15f2b748e9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperdf15f2b748e9\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
