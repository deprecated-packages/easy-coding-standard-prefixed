<?php

namespace _PhpScoper418afc2f157c;

use _PhpScoper418afc2f157c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper418afc2f157c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper418afc2f157c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
