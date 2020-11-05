<?php

namespace _PhpScoperdebd9d705540;

use _PhpScoperdebd9d705540\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperdebd9d705540\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperdebd9d705540\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
