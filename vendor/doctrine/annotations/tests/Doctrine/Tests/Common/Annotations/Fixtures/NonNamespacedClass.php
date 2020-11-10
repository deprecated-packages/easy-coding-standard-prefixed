<?php

namespace _PhpScoper0c236037eb04;

use _PhpScoper0c236037eb04\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper0c236037eb04\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper0c236037eb04\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
