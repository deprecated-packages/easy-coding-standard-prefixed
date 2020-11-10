<?php

namespace _PhpScoper48800f361566;

use _PhpScoper48800f361566\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper48800f361566\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper48800f361566\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
