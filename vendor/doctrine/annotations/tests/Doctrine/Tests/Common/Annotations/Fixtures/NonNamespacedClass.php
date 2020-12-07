<?php

namespace _PhpScopereb8678af2407;

use _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopereb8678af2407\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
