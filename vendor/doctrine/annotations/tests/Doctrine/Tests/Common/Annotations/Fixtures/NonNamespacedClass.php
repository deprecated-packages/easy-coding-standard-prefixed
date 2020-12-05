<?php

namespace _PhpScoper81b3ff5ab9fe;

use _PhpScoper81b3ff5ab9fe\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper81b3ff5ab9fe\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper81b3ff5ab9fe\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
