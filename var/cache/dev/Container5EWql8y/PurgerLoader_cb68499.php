<?php

class PurgerLoader_cb68499 extends \Fidry\AliceDataFixtures\Loader\PurgerLoader implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function withPersister(\Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister) : \Fidry\AliceDataFixtures\Loader\PurgerLoader
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'withPersister', array('persister' => $persister), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->withPersister($persister);
    }

    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->load($fixturesFiles, $parameters, $objects, $purgeMode);
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory, $instance->defaultPurgeMode, $instance->logger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($instance);

        $instance->initializer5e365 = $initializer;

        return $instance;
    }

    public function __construct(\Fidry\AliceDataFixtures\LoaderInterface $decoratedLoader, \Fidry\AliceDataFixtures\Persistence\PurgerFactoryInterface $purgerFactory, string $defaultPurgeMode, ?\Psr\Log\LoggerInterface $logger = null)
    {
        static $reflection;

        if (! $this->valueHolder7cc3a) {
            $reflection = $reflection ?: new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PurgerLoader');
            $this->valueHolder7cc3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory, $instance->defaultPurgeMode, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($this);

        }

        $this->valueHolder7cc3a->__construct($decoratedLoader, $purgerFactory, $defaultPurgeMode, $logger);
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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PurgerLoader $instance) {
            unset($instance->loader, $instance->purgerFactory, $instance->defaultPurgeMode, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PurgerLoader')->__invoke($this);
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
