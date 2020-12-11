<?php

namespace _PhpScoper3b1d73f28e67;

use _PhpScoper3b1d73f28e67\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper3b1d73f28e67\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper3b1d73f28e67\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
