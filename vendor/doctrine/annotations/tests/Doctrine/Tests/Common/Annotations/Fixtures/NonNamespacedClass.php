<?php

namespace _PhpScoper133be48300f9;

use _PhpScoper133be48300f9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper133be48300f9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper133be48300f9\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
