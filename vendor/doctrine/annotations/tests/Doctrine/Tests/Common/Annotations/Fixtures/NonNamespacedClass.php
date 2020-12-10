<?php

namespace _PhpScoperb458b528613f;

use _PhpScoperb458b528613f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb458b528613f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb458b528613f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
