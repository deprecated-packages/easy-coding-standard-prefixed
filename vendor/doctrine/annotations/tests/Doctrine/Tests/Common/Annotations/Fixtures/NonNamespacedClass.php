<?php

namespace _PhpScoper59558822d8c7;

use _PhpScoper59558822d8c7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper59558822d8c7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper59558822d8c7\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
