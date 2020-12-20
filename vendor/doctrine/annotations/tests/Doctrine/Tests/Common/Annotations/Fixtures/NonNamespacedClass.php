<?php

namespace _PhpScoper9885c8c176c7;

use _PhpScoper9885c8c176c7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper9885c8c176c7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper9885c8c176c7\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
