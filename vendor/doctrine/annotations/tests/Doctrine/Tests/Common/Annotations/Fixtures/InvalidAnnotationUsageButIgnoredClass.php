<?php

namespace _PhpScoper8b97b0dd6f5b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8b97b0dd6f5b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @NoAnnotation
 * @IgnoreAnnotation("NoAnnotation")
 * @Route("foo")
 */
class InvalidAnnotationUsageButIgnoredClass
{
}
