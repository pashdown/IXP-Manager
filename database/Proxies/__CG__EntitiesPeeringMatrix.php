<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PeeringMatrix extends \Entities\PeeringMatrix implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'x_as', 'y_as', 'peering_status', 'updated', 'id', 'XCustomer', 'YCustomer', 'vlan'];
        }

        return ['__isInitialized__', 'x_as', 'y_as', 'peering_status', 'updated', 'id', 'XCustomer', 'YCustomer', 'vlan'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PeeringMatrix $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setXAs($xAs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setXAs', [$xAs]);

        return parent::setXAs($xAs);
    }

    /**
     * {@inheritDoc}
     */
    public function getXAs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getXAs', []);

        return parent::getXAs();
    }

    /**
     * {@inheritDoc}
     */
    public function setYAs($yAs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYAs', [$yAs]);

        return parent::setYAs($yAs);
    }

    /**
     * {@inheritDoc}
     */
    public function getYAs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYAs', []);

        return parent::getYAs();
    }

    /**
     * {@inheritDoc}
     */
    public function setPeeringStatus($peeringStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeeringStatus', [$peeringStatus]);

        return parent::setPeeringStatus($peeringStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getPeeringStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeeringStatus', []);

        return parent::getPeeringStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', [$updated]);

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', []);

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setXCustomer(\Entities\Customer $xCustomer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setXCustomer', [$xCustomer]);

        return parent::setXCustomer($xCustomer);
    }

    /**
     * {@inheritDoc}
     */
    public function getXCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getXCustomer', []);

        return parent::getXCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setYCustomer(\Entities\Customer $yCustomer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYCustomer', [$yCustomer]);

        return parent::setYCustomer($yCustomer);
    }

    /**
     * {@inheritDoc}
     */
    public function getYCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYCustomer', []);

        return parent::getYCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlan($vlan)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlan', [$vlan]);

        return parent::setVlan($vlan);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlan()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlan', []);

        return parent::getVlan();
    }

}
