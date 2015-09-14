<?php
namespace explorapp\PCBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios")
 */
 
 class Usuarios
 {
	/** 
	 * @ORM\Id 
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 * @ORM\Column(name="idUsuario", type="integer") 
	 */
	private $id;
	
	/** @ORM\Column(name="userName", type="string", length=45, nullable=false) */
	private $userName;
	
    	/** @ORM\Column(name="userPass", type="string", length=45, nullable=false) */
	private $userPass;
	
	/**
     	* @ORM\OneToOne(targetEntity="DatosPersonales", mappedBy="Usuarios")
     	**/
	protected $datosPersonales;
	
	/**
    	* @ORM\OneToMany(targetEntity="Negocio", mappedBy="Usuarios")
    	**/
	protected $negocio;
	
	
	
	/**
    	* @ORM\OneToMany(targetEntity="OfertasCliente", mappedBy="usuarios")
    	**/
	protected $ofertascliente;

	
	
	public function __construct()
	{
		$this->negocio = new ArrayCollection();
		$this->ofertascliente = new ArrayCollection();
	}
	
	
	
	
	
	
	 /**
     * Get ID
     *
     * @return integer 
     */	
	public function getId()
	{
		return $this->id;
	}
	
    /**
     * Set ID
     *
     * @param int $value
     */	
	public function setId($value)
	{
		$this->id = $value;
	}
	
	
	 /**
     * Get userName
     *
     * @return string 
     */	
	public function getUserName()
	{
		return $this->userName;
	}
	
    /**
     * Set userName
     *
     * @param string $value
     */	
	public function setUserName($value)
	{
		$this->userName = $value;
	}
	
	
	 /**
     * Get userPass
     *
     * @return string 
     */	
	public function getUserPass()
	{
		return $this->userPass;
	}
	
    /**
     * Set userPass
     *
     * @param string $value
     */	
	public function setUserPass($value)
	{
		$this->userPass = $value;
	}
	
	
	/**
	* Set idUsuariosDatosPersonales
	*
	* @param DatosPersonales $datoPersonal
	*
	* @return int
	**/
	public function setDatoPersonal($datoPersonal) {
		$this->datosPersonales = $datoPersonal;
	}
	
	/**
	* Get idUsuariosDatosPersonales
	*
	* @return int
	*/
	public function getDatosPersonales() {
		return $this->datosPersonales;
	}
	
	
	
	
	/**
	* Get negocio
	*
	* @return PDOCTRINE\Entidades\Negocio
	*/
	public function getNegocio(){
		return $this->negocio;
	}
	
	/**
        * Add negocio
        *
        * @param PDOCTRINE\Entidades\Negocio $value
        */	
	public function addNegocio($value)
	{
		$this->negocio[] = $value;
	}




	public function addOfertasCliente(OfertasCliente $ofertascliente)
	{
		$ofertascliente->setProduct($this);
		$this->ofertascliente[] = $ofertascliente;
		return $this;
	}

	public function removeOfertasCliente(OfertasCliente $ofertascliente)
	{
		$this->ofertascliente->removeElement($ofertascliente);
	}
	
 }
?>
