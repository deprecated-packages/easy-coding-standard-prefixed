<?php

namespace _PhpScoper207eb8f99af3;

use _PhpScoper207eb8f99af3\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper207eb8f99af3\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper207eb8f99af3\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
