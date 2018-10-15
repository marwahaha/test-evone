<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function getConnection()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getConnection', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getMetadataFactory', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getExpressionBuilder', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'beginTransaction', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getCache', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'transactional', array('func' => $func), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->transactional($func);
    }

    public function commit()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'commit', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->commit();
    }

    public function rollback()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'rollback', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getClassMetadata', array('className' => $className), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'createQuery', array('dql' => $dql), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'createNamedQuery', array('name' => $name), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'createQueryBuilder', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'flush', array('entity' => $entity), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'clear', array('entityName' => $entityName), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->clear($entityName);
    }

    public function close()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'close', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->close();
    }

    public function persist($entity)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'persist', array('entity' => $entity), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'remove', array('entity' => $entity), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'refresh', array('entity' => $entity), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'detach', array('entity' => $entity), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'merge', array('entity' => $entity), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'contains', array('entity' => $entity), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getEventManager', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getConfiguration', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'isOpen', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getUnitOfWork', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getProxyFactory', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'initializeObject', array('obj' => $obj), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'getFilters', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'isFiltersStateClean', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5e365 && ($this->initializer5e365->__invoke($valueHolder7cc3a, $this, 'hasFilters', array(), $this->initializer5e365) || 1) && $this->valueHolder7cc3a = $valueHolder7cc3a;

        return $this->valueHolder7cc3a->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer5e365 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7cc3a) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7cc3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7cc3a->__construct($conn, $config, $eventManager);
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
