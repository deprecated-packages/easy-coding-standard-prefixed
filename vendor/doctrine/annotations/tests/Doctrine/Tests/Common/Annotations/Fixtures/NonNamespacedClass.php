<?php

namespace _PhpScoperbc5235eb86f3;

use _PhpScoperbc5235eb86f3\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperbc5235eb86f3\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperbc5235eb86f3\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
