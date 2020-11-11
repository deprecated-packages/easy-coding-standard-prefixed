<?php

namespace _PhpScoper06c66bea2cf6;

use _PhpScoper06c66bea2cf6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper06c66bea2cf6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper06c66bea2cf6\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
