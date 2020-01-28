<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class IXP extends \Entities\IXP implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'name', 'shortname', 'address1', 'address2', 'address3', 'address4', 'country', 'id', 'Infrastructures', '' . "\0" . 'Entities\\IXP' . "\0" . 'Customers', '' . "\0" . 'Entities\\IXP' . "\0" . 'TrafficDaily'];
        }

        return ['__isInitialized__', 'name', 'shortname', 'address1', 'address2', 'address3', 'address4', 'country', 'id', 'Infrastructures', '' . "\0" . 'Entities\\IXP' . "\0" . 'Customers', '' . "\0" . 'Entities\\IXP' . "\0" . 'TrafficDaily'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (IXP $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setShortname($shortname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortname', [$shortname]);

        return parent::setShortname($shortname);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortname', []);

        return parent::getShortname();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress1($address1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress1', [$address1]);

        return parent::setAddress1($address1);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress1', []);

        return parent::getAddress1();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress2($address2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress2', [$address2]);

        return parent::setAddress2($address2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress2', []);

        return parent::getAddress2();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress3($address3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress3', [$address3]);

        return parent::setAddress3($address3);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress3', []);

        return parent::getAddress3();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress4($address4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress4', [$address4]);

        return parent::setAddress4($address4);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress4', []);

        return parent::getAddress4();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
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
    public function addInfrastructure(\Entities\Infrastructure $infrastructures)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInfrastructure', [$infrastructures]);

        return parent::addInfrastructure($infrastructures);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInfrastructure(\Entities\Infrastructure $infrastructures)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInfrastructure', [$infrastructures]);

        return parent::removeInfrastructure($infrastructures);
    }

    /**
     * {@inheritDoc}
     */
    public function getInfrastructures()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfrastructures', []);

        return parent::getInfrastructures();
    }

    /**
     * {@inheritDoc}
     */
    public function addCustomer(\Entities\Customer $customers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCustomer', [$customers]);

        return parent::addCustomer($customers);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCustomer(\Entities\Customer $customers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCustomer', [$customers]);

        return parent::removeCustomer($customers);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomers', []);

        return parent::getCustomers();
    }

    /**
     * {@inheritDoc}
     */
    public function addTrafficDaily(\Entities\TrafficDaily $trafficDaily)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTrafficDaily', [$trafficDaily]);

        return parent::addTrafficDaily($trafficDaily);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTrafficDaily(\Entities\TrafficDaily $trafficDaily)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTrafficDaily', [$trafficDaily]);

        return parent::removeTrafficDaily($trafficDaily);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrafficDaily()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrafficDaily', []);

        return parent::getTrafficDaily();
    }

}
