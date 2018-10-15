<?php

class ObjectManagerPersister_eccc052 extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder7cc3a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5e365 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties342e0 = [
        
    ];

    public function persist($object)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'persist', array('object' => $object), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->persist($object);
    }

    public function flush()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'flush', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->flush();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadata);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($instance);

        $instance->initializer5e365 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Common\Persistence\ObjectManager $manager)
    {
        static $reflection;

        if (! $this->valueHolder7cc3a) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
            $this->valueHolder7cc3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadata);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);

        }

        $this->valueHolder7cc3a->__construct($manager);
    }

    public function & __get($name)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, '__get', ['name' => $name], $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        if (isset(self::$publicProperties342e0[$name])) {
            return $this->valueHolder7cc3a->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7cc3a;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder7cc3a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7cc3a;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder7cc3a;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, '__isset', array('name' => $name), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7cc3a;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7cc3a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, '__unset', array('name' => $name), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7cc3a;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7cc3a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, '__clone', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        $this->valueHolder7cc3a = clone $this->valueHolder7cc3a;
    }

    public function __sleep()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, '__sleep', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return array('valueHolder7cc3a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadata);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5e365 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer5e365;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'initializeProxy', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7cc3a;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder7cc3a;
    }


}
