<?php

namespace _PhpScoper279cf54b77ad;

use _PhpScoper279cf54b77ad\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper279cf54b77ad\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper279cf54b77ad\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
