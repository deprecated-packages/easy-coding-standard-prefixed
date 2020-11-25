<?php

namespace _PhpScoperdc8fbcd7c69d;

use _PhpScoperdc8fbcd7c69d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperdc8fbcd7c69d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperdc8fbcd7c69d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
