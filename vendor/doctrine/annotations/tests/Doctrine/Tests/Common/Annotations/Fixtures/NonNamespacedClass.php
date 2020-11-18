<?php

namespace _PhpScoperf77bffce0320;

use _PhpScoperf77bffce0320\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperf77bffce0320\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperf77bffce0320\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
