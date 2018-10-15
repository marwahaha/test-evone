<?php

class ShopperContext_d398ef6 extends \Sylius\Component\Core\Context\ShopperContext implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function getChannel() : \Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getChannel', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getChannel();
    }

    public function getCurrencyCode() : string
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getCurrencyCode', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getCurrencyCode();
    }

    public function getLocaleCode() : string
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getLocaleCode', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getLocaleCode();
    }

    public function getCustomer() : ?\Sylius\Component\Customer\Model\CustomerInterface
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getCustomer', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getCustomer();
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

        \Closure::bind(function (\Sylius\Component\Core\Context\ShopperContext $instance) {
            unset($instance->channelContext, $instance->currencyContext, $instance->localeContext, $instance->customerContext);
        }, $instance, 'Sylius\\Component\\Core\\Context\\ShopperContext')->__invoke($instance);

        $instance->initializer5e365 = $initializer;

        return $instance;
    }

    public function __construct(\Sylius\Component\Channel\Context\ChannelContextInterface $channelContext, \Sylius\Component\Currency\Context\CurrencyContextInterface $currencyContext, \Sylius\Component\Locale\Context\LocaleContextInterface $localeContext, \Sylius\Component\Customer\Context\CustomerContextInterface $customerContext)
    {
        static $reflection;

        if (! $this->valueHolder7cc3a) {
            $reflection = $reflection ?: new \ReflectionClass('Sylius\\Component\\Core\\Context\\ShopperContext');
            $this->valueHolder7cc3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sylius\Component\Core\Context\ShopperContext $instance) {
            unset($instance->channelContext, $instance->currencyContext, $instance->localeContext, $instance->customerContext);
        }, $this, 'Sylius\\Component\\Core\\Context\\ShopperContext')->__invoke($this);

        }

        $this->valueHolder7cc3a->__construct($channelContext, $currencyContext, $localeContext, $customerContext);
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
        \Closure::bind(function (\Sylius\Component\Core\Context\ShopperContext $instance) {
            unset($instance->channelContext, $instance->currencyContext, $instance->localeContext, $instance->customerContext);
        }, $this, 'Sylius\\Component\\Core\\Context\\ShopperContext')->__invoke($this);
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
