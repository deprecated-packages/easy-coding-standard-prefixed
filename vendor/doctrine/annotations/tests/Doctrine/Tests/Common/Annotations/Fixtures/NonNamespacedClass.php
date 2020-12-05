<?php

namespace _PhpScoper02b5d1bf8fec;

use _PhpScoper02b5d1bf8fec\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper02b5d1bf8fec\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper02b5d1bf8fec\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
