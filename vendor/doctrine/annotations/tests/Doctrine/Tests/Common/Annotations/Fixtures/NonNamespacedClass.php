<?php

namespace _PhpScoper880bfa4d8b51;

use _PhpScoper880bfa4d8b51\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper880bfa4d8b51\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper880bfa4d8b51\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
