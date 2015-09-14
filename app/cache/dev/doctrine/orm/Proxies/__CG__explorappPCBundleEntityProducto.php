<?php

namespace Proxies\__CG__\explorapp\PCBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Producto extends \explorapp\PCBundle\Entity\Producto implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'idProductos', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'nombreProducto', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'descripcionProducto', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'precioProducto', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'alergenosProducto', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'idNegocio', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'Negocio', 'oferta');
        }

        return array('__isInitialized__', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'idProductos', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'nombreProducto', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'descripcionProducto', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'precioProducto', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'alergenosProducto', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'idNegocio', '' . "\0" . 'explorapp\\PCBundle\\Entity\\Producto' . "\0" . 'Negocio', 'oferta');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Producto $proxy) {
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
    public function getID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getID', array());

        return parent::getID();
    }

    /**
     * {@inheritDoc}
     */
    public function setID($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setID', array($value));

        return parent::setID($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreProducto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreProducto', array());

        return parent::getNombreProducto();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreProducto($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreProducto', array($value));

        return parent::setNombreProducto($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcionProducto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcionProducto', array());

        return parent::getDescripcionProducto();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcionProducto($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcionProducto', array($value));

        return parent::setDescripcionProducto($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecioProducto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecioProducto', array());

        return parent::getPrecioProducto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecioProducto($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecioProducto', array($value));

        return parent::setPrecioProducto($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlergenosProducto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlergenosProducto', array());

        return parent::getAlergenosProducto();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlergenosProducto($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlergenosProducto', array($value));

        return parent::setAlergenosProducto($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdNegocio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdNegocio', array());

        return parent::getIdNegocio();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdNegocio($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdNegocio', array($value));

        return parent::setIdNegocio($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getNegocio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNegocio', array());

        return parent::getNegocio();
    }

    /**
     * {@inheritDoc}
     */
    public function setNegocio($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNegocio', array($value));

        return parent::setNegocio($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getOferta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOferta', array());

        return parent::getOferta();
    }

    /**
     * {@inheritDoc}
     */
    public function addOferta($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOferta', array($value));

        return parent::addOferta($value);
    }

}
