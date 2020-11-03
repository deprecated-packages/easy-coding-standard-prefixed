<?php

namespace _PhpScoper61bdb485188f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper61bdb485188f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @NoAnnotation
 * @IgnoreAnnotation("NoAnnotation")
 * @Route("foo")
 */
class InvalidAnnotationUsageButIgnoredClass
{
}
