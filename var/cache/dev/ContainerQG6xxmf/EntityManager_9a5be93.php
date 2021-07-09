<?php

namespace ContainerQG6xxmf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderee2e7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere9134 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaac36 = [
        
    ];

    public function getConnection()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getConnection', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getMetadataFactory', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getExpressionBuilder', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'beginTransaction', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getCache', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getCache();
    }

    public function transactional($func)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'transactional', array('func' => $func), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->transactional($func);
    }

    public function commit()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'commit', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->commit();
    }

    public function rollback()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'rollback', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getClassMetadata', array('className' => $className), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'createQuery', array('dql' => $dql), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'createNamedQuery', array('name' => $name), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'createQueryBuilder', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'flush', array('entity' => $entity), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'clear', array('entityName' => $entityName), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->clear($entityName);
    }

    public function close()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'close', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->close();
    }

    public function persist($entity)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'persist', array('entity' => $entity), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'remove', array('entity' => $entity), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'refresh', array('entity' => $entity), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'detach', array('entity' => $entity), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'merge', array('entity' => $entity), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getRepository', array('entityName' => $entityName), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'contains', array('entity' => $entity), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getEventManager', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getConfiguration', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'isOpen', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getUnitOfWork', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getProxyFactory', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'initializeObject', array('obj' => $obj), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'getFilters', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'isFiltersStateClean', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'hasFilters', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return $this->valueHolderee2e7->hasFilters();
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

        $instance->initializere9134 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderee2e7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderee2e7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderee2e7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, '__get', ['name' => $name], $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        if (isset(self::$publicPropertiesaac36[$name])) {
            return $this->valueHolderee2e7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee2e7;

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

        $targetObject = $this->valueHolderee2e7;
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
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee2e7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderee2e7;
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
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, '__isset', array('name' => $name), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee2e7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderee2e7;
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
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, '__unset', array('name' => $name), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee2e7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderee2e7;
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
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, '__clone', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        $this->valueHolderee2e7 = clone $this->valueHolderee2e7;
    }

    public function __sleep()
    {
        $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, '__sleep', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;

        return array('valueHolderee2e7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere9134 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere9134;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere9134 && ($this->initializere9134->__invoke($valueHolderee2e7, $this, 'initializeProxy', array(), $this->initializere9134) || 1) && $this->valueHolderee2e7 = $valueHolderee2e7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderee2e7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderee2e7;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
