<?php

namespace _PhpScoper08748c77fa1c;

use _PhpScoper08748c77fa1c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper08748c77fa1c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper08748c77fa1c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
