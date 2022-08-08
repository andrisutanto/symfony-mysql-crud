<?php

namespace ContainerMT0eYO2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderccdf0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer88f22 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb4167 = [
        
    ];

    public function getConnection()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getConnection', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getMetadataFactory', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getExpressionBuilder', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'beginTransaction', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getCache', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'transactional', array('func' => $func), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'wrapInTransaction', array('func' => $func), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'commit', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->commit();
    }

    public function rollback()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'rollback', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getClassMetadata', array('className' => $className), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'createQuery', array('dql' => $dql), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'createNamedQuery', array('name' => $name), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'createQueryBuilder', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'flush', array('entity' => $entity), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'clear', array('entityName' => $entityName), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->clear($entityName);
    }

    public function close()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'close', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->close();
    }

    public function persist($entity)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'persist', array('entity' => $entity), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'remove', array('entity' => $entity), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'refresh', array('entity' => $entity), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'detach', array('entity' => $entity), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'merge', array('entity' => $entity), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'contains', array('entity' => $entity), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getEventManager', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getConfiguration', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'isOpen', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getUnitOfWork', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getProxyFactory', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'initializeObject', array('obj' => $obj), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'getFilters', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'isFiltersStateClean', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'hasFilters', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return $this->valueHolderccdf0->hasFilters();
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

        $instance->initializer88f22 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderccdf0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderccdf0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderccdf0->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, '__get', ['name' => $name], $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        if (isset(self::$publicPropertiesb4167[$name])) {
            return $this->valueHolderccdf0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccdf0;

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

        $targetObject = $this->valueHolderccdf0;
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
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccdf0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderccdf0;
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
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, '__isset', array('name' => $name), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccdf0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderccdf0;
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
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, '__unset', array('name' => $name), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderccdf0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderccdf0;
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
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, '__clone', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        $this->valueHolderccdf0 = clone $this->valueHolderccdf0;
    }

    public function __sleep()
    {
        $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, '__sleep', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;

        return array('valueHolderccdf0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer88f22 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer88f22;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer88f22 && ($this->initializer88f22->__invoke($valueHolderccdf0, $this, 'initializeProxy', array(), $this->initializer88f22) || 1) && $this->valueHolderccdf0 = $valueHolderccdf0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderccdf0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderccdf0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
