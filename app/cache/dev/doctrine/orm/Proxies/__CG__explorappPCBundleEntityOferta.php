<?php

namespace Proxies\__CG__\explorapp\PCBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Oferta extends \explorapp\PCBundle\Entity\Oferta implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'idOfertas', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'fechaInicialOferta', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'fechaFinalOferta', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'edadPublicoOfertas', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'descripcionOfertas', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'idProducto', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'Producto', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'ofertascliente');
        }

        return array('__isInitialized__', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'idOfertas', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'fechaInicialOferta', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'fechaFinalOferta', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'edadPublicoOfertas', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'descripcionOfertas', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'idProducto', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'Producto', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Oferta' . "\0" . 'ofertascliente');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Oferta $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdOfertas()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdOfertas();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdOfertas', array());

        return parent::getIdOfertas();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdOfertas($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdOfertas', array($value));

        return parent::setIdOfertas($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaInicialOferta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaInicialOferta', array());

        return parent::getFechaInicialOferta();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaInicialOferta($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaInicialOferta', array($value));

        return parent::setFechaInicialOferta($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaFinalOferta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaFinalOferta', array());

        return parent::getFechaFinalOferta();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaFinalOferta($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaFinalOferta', array($value));

        return parent::setFechaFinalOferta($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getEdadPublicoOfertas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEdadPublicoOfertas', array());

        return parent::getEdadPublicoOfertas();
    }

    /**
     * {@inheritDoc}
     */
    public function setEdadPublicoOfertas($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEdadPublicoOfertas', array($value));

        return parent::setEdadPublicoOfertas($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcionOfertas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcionOfertas', array());

        return parent::getDescripcionOfertas();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcionOfertas($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcionOfertas', array($value));

        return parent::setDescripcionOfertas($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdProducto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProducto', array());

        return parent::getIdProducto();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdProducto($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdProducto', array($value));

        return parent::setIdProducto($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getProducto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducto', array());

        return parent::getProducto();
    }

    /**
     * {@inheritDoc}
     */
    public function setProducto($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProducto', array($value));

        return parent::setProducto($value);
    }

    /**
     * {@inheritDoc}
     */
    public function addOfertasCliente(\explorapp\PCBundle\Entity\OfertasCliente $ofertascliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOfertasCliente', array($ofertascliente));

        return parent::addOfertasCliente($ofertascliente);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOfertasCliente(\explorapp\PCBundle\Entity\OfertasCliente $ofertascliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOfertasCliente', array($ofertascliente));

        return parent::removeOfertasCliente($ofertascliente);
    }

}
