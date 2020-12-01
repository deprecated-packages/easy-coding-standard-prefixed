<?php

namespace _PhpScoperb36402634947;

use _PhpScoperb36402634947\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb36402634947\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb36402634947\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
