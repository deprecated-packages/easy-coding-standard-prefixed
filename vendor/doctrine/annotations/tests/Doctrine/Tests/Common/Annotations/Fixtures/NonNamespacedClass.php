<?php

namespace _PhpScoper5928e324b45e;

use _PhpScoper5928e324b45e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper5928e324b45e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper5928e324b45e\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
