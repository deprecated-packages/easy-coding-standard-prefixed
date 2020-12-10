<?php

namespace _PhpScoper3ba93baeac18;

use _PhpScoper3ba93baeac18\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper3ba93baeac18\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper3ba93baeac18\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
