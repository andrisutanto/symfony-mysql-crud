<?php

namespace ContainerF1kgynn;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbdeda = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1d0a0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese7053 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getConnection', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getMetadataFactory', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getExpressionBuilder', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'beginTransaction', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getCache', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'transactional', array('func' => $func), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'commit', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->commit();
    }

    public function rollback()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'rollback', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getClassMetadata', array('className' => $className), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'createQuery', array('dql' => $dql), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'createNamedQuery', array('name' => $name), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'createQueryBuilder', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'flush', array('entity' => $entity), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'clear', array('entityName' => $entityName), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->clear($entityName);
    }

    public function close()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'close', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->close();
    }

    public function persist($entity)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'persist', array('entity' => $entity), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'remove', array('entity' => $entity), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'refresh', array('entity' => $entity), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'detach', array('entity' => $entity), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'merge', array('entity' => $entity), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'contains', array('entity' => $entity), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getEventManager', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getConfiguration', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'isOpen', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getUnitOfWork', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getProxyFactory', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'initializeObject', array('obj' => $obj), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'getFilters', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'isFiltersStateClean', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'hasFilters', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return $this->valueHolderbdeda->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer1d0a0 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderbdeda) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbdeda = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbdeda->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, '__get', ['name' => $name], $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        if (isset(self::$publicPropertiese7053[$name])) {
            return $this->valueHolderbdeda->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbdeda;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbdeda;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbdeda;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbdeda;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, '__isset', array('name' => $name), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbdeda;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbdeda;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, '__unset', array('name' => $name), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbdeda;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbdeda;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, '__clone', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        $this->valueHolderbdeda = clone $this->valueHolderbdeda;
    }

    public function __sleep()
    {
        $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, '__sleep', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;

        return array('valueHolderbdeda');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1d0a0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1d0a0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1d0a0 && ($this->initializer1d0a0->__invoke($valueHolderbdeda, $this, 'initializeProxy', array(), $this->initializer1d0a0) || 1) && $this->valueHolderbdeda = $valueHolderbdeda;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbdeda;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbdeda;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
