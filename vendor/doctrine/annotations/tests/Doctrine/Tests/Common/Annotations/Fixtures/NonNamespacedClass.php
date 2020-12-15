<?php

namespace _PhpScoper839420027581;

use _PhpScoper839420027581\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper839420027581\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper839420027581\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
