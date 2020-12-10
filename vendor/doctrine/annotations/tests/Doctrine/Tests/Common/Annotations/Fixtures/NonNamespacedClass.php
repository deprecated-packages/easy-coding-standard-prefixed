<?php

namespace _PhpScoper9ef667a5e42c;

use _PhpScoper9ef667a5e42c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper9ef667a5e42c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper9ef667a5e42c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
