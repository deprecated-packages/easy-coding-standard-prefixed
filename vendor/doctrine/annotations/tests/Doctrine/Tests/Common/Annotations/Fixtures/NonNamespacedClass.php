<?php

namespace _PhpScoper61bdb485188f;

use _PhpScoper61bdb485188f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper61bdb485188f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper61bdb485188f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
