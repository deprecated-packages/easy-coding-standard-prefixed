<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper4936962185e7\Symfony\Component\DependencyInjection;

/**
 * Represents a PHP type-hinted service reference.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class TypedReference extends \_PhpScoper4936962185e7\Symfony\Component\DependencyInjection\Reference
{
    private $type;
    private $name;
    private $requiringClass;
    /**
     * @param string $id              The service identifier
     * @param string $type            The PHP type of the identified service
     * @param int    $invalidBehavior The behavior when the service does not exist
     * @param string $name            The name of the argument targeting the service
     */
    public function __construct(string $id, string $type, $invalidBehavior = \_PhpScoper4936962185e7\Symfony\Component\DependencyInjection\ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, $name = null)
    {
        if (\is_string($invalidBehavior ?? '') || \is_int($name)) {
            @\trigger_error(\sprintf('The $requiringClass argument of "%s()" is deprecated since Symfony 4.1.', __METHOD__), \E_USER_DEPRECATED);
            $this->requiringClass = $invalidBehavior;
            $invalidBehavior = 3 < \func_num_args() ? \func_get_arg(3) : \_PhpScoper4936962185e7\Symfony\Component\DependencyInjection\ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;
        } else {
            $this->name = $type === $id ? $name : null;
        }
        parent::__construct($id, $invalidBehavior);
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @deprecated since Symfony 4.1
     */
    public function getRequiringClass()
    {
        @\trigger_error(\sprintf('The "%s()" method is deprecated since Symfony 4.1.', __METHOD__), \E_USER_DEPRECATED);
        return $this->requiringClass ?? '';
    }
    /**
     * @deprecated since Symfony 4.1
     */
    public function canBeAutoregistered()
    {
        @\trigger_error(\sprintf('The "%s()" method is deprecated since Symfony 4.1.', __METHOD__), \E_USER_DEPRECATED);
        return $this->requiringClass && \false !== ($i = \strpos($this->type, '\\')) && 0 === \strncasecmp($this->type, $this->requiringClass, 1 + $i);
    }
}
