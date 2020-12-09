<?php

namespace _PhpScoper9b9ddfd01528;

use _PhpScoper9b9ddfd01528\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper9b9ddfd01528\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper9b9ddfd01528\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
