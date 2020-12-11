<?php

namespace _PhpScoper1e80a2e03314;

use _PhpScoper1e80a2e03314\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper1e80a2e03314\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper1e80a2e03314\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
