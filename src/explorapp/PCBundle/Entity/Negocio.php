<?php

	namespace explorapp\PCBundle\Entity;

	use Doctrine\Common\Collections\ArrayCollection;
	use Doctrine\ORM\Mapping as ORM;

	/**
	* @ORM\Entity
	* @ORM\Table(name="negocio")
	*/
	 
	class Negocio{
		/** 
		* @ORM\ID
		* @ORM\GeneratedValue(strategy="IDENTITY")
		* @ORM\Column(name="idNegocio", type="integer") 
		*/
		private $idNegocio;
		
		/** @ORM\Column(name="nombreNegocio", type="string", length=45, nullable=false) */
		private $nombreNegocio;
		
		/** @ORM\Column(name="direccionNegocio", type="string", length=45, nullable=false) */
		private $direccionNegocio;
		
		/** @ORM\Column(name="telefonoNegocio", type="integer", length=11, nullable=true) */
		private $telefonoNegocio;
		
		/** @ORM\Column(name="correoNegocio", type="string", length=45, nullable=false) */
		private $correoNegocio;
		
		/** @ORM\Column(name="tipoNegocio", type="string", length=45, nullable=false) */
		private $tipoNegocio;
		
		/** @ORM\Column(name="idUsuario", type="integer", length=11, nullable=false) */
		private $idUsuario;

		/** @ORM\Column(name="ciudadNegocio", type="string", length=45, nullable=false) */
		private $ciudadNegocio;
		
		/**
		* @ORM\ManyToOne(targetEntity="Usuarios", inversedBy="negocio")
		* @ORM\JoinColumn(name="idUsuario", referencedColumnName="idUsuario")
		*/
		private $Usuarios;

		/**
	    	* @ORM\OneToMany(targetEntity="Producto", mappedBy="Negocio")
	    	**/
		protected $producto;
		
		
		
		
		public function __construct(){	
			$this->producto = new ArrayCollection();	
		}
		
		
		/**
		* Get idNegocio
		*
		* @ORM\return integer 
		*/	
		public function getIdNegocio()
		{
			return $this->idNegocio;
		}
		
		/**
		* Set idNegocio
		*
		* @ORM\return integer 
		*/	
		public function setIdNegocio($value)
		{
			$this->idNegocio = $value;
		}
		
		
		
		/**
		* Get nombreNegocio
		*
		* @ORM\return string 
		*/	
		public function getNombreNegocio()
		{
			return $this->nombreNegocio;
		}
		
		/**
		* Set nombreNegocio
		*
		* @ORM\return string 
		*/	
		public function setNombreNegocio($value)
		{
			$this->nombreNegocio = $value;
		}
		
		
		
		
		/**
		* Get direccionNegocio
		*
		* @ORM\return string 
		*/	
		public function getDireccionNegocio()
		{
			return $this->direccionNegocio;
		}
		
		/**
		* Set direccionNegocio
		*
		* @ORM\return string 
		*/	
		public function setDireccionNegocio($value)
		{
			$this->direccionNegocio = $value;
		}
		
		
		
		
		/**
		* Get telefonoNegocio
		*
		* @ORM\return integer 
		*/	
		public function getTelefonoNegocio()
		{
			return $this->telefonoNegocio;
		}
		
		/**
		* Set telefonoNegocio
		*
		* @ORM\return integer 
		*/	
		public function setTelefonoNegocio($value)
		{
			$this->telefonoNegocio = $value;
		}
		
		
		
		
		/**
		* Get correoNegocio
		*
		* @ORM\return string 
		*/	
		public function getCorreoNegocio()
		{
			return $this->correoNegocio;
		}
		
		/**
		* Set correoNegocio
		*
		* @ORM\return string 
		*/	
		public function setCorreoNegocio($value)
		{
			$this->correoNegocio = $value;
		}
		
		
		
		
		/**
		* Set tipoNegocio
		*
		* @ORM\param string $value
		*/	
		public function getTipoNegocio()
		{
			return $this->tipoNegocio;
		}

		/**
		* Set tipoNegocio
		*
		* @ORM\param string $value
		*/
		public function setTipoNegocio($value){
			$this->tipoNegocio = $value;
		}
		
		
		
		
		
		/**
		* Set idUsuario
		*
		* @ORM\param integer $value
		*/	
		public function getIdUsuario()
		{
			return $this->idUsuario;
		}

		/**
		* Set idUsuario
		*
		* @ORM\param integer $value
		*/
		public function setIdUsuario($value){
			$this->idUsuario = $value;
		}





		/**
		* Set ciudadNegocio
		*

		* @ORM\param string $value
		*/	
		public function getCiudadNegocio()
		{
			return $this->ciudadNegocio;
		}

		/**

		* Set ciudadNegocio
		*
		* @ORM\param string $value

		*/
		public function setCiudadNegocio($value){
			$this->ciudadNegocio = $value;
		}




		
		
		
		
		/**
		* Get Usuarios
		*
		* @ORM\return PDOCTRINE\Entidades\Usuarios 		
		*/			
		public function getUsuarios()
		{
			return $this->Usuarios;
		}

		/**
		* Set Usuarios
		*
		* @ORM\param PDOCTRINE\Entidades\Usuarios $value
		*/	
		public function setUsuarios($value)
		{
			$this->Usuarios = $value;
		}





		/**
		* Get producto
		*
		* @return PDOCTRINE\Entidades\Producto
		*/
		public function getProducto(){
			return $this->producto;
		}
	
		/**
		* Add producto
		*
		* @param PDOCTRINE\Entidades\Producto $value
		*/	
		public function addProducto($value)
		{
			$this->producto[] = $value;
		}

		
	}

?>
