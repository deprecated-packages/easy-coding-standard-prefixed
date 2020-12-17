<?php

namespace _PhpScoperfa7254c25e18;

use _PhpScoperfa7254c25e18\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperfa7254c25e18\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperfa7254c25e18\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
