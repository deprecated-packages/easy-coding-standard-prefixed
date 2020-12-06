<?php

namespace _PhpScoper3e8786a75afe;

use _PhpScoper3e8786a75afe\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper3e8786a75afe\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper3e8786a75afe\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
