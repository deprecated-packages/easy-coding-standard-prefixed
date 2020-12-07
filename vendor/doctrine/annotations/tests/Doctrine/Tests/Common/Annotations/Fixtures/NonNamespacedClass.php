<?php

namespace _PhpScoperb73f9e44f4eb;

use _PhpScoperb73f9e44f4eb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb73f9e44f4eb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb73f9e44f4eb\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
