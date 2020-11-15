<?php

namespace _PhpScoper21763e6c7ac4;

use _PhpScoper21763e6c7ac4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper21763e6c7ac4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper21763e6c7ac4\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
