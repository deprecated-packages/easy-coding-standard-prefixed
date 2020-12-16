<?php

namespace _PhpScoperb6a8e65b492c;

use _PhpScoperb6a8e65b492c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb6a8e65b492c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb6a8e65b492c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
