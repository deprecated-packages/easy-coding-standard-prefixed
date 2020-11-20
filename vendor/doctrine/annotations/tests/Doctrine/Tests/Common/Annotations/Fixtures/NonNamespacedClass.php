<?php

namespace _PhpScoperc753ccca5a0c;

use _PhpScoperc753ccca5a0c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperc753ccca5a0c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperc753ccca5a0c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
