<?php

namespace _PhpScoper37a255897161;

use _PhpScoper37a255897161\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper37a255897161\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper37a255897161\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
