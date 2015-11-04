<?php

	namespace explorapp\PCBundle\Entity;

	use Doctrine\Common\Collections\ArrayCollection;
	use Doctrine\ORM\Mapping as ORM;

	/**
	* @ORM\Entity
	* @ORM\Table(name="ofertas")
	*/
	 
	class Oferta{
		/** 
		* @ORM\ID
		* @ORM\GeneratedValue(strategy="IDENTITY")
		* @ORM\Column(name="idOfertas", type="integer") 
		*/
		private $idOfertas;
		
		/** @ORM\Column(name="fechaInicialOfertas", type="date", length=45, nullable=true) */
		private $fechaInicialOferta;
		
		/** @ORM\Column(name="fechaFinalOfertas", type="date", length=45, nullable=true) */
		private $fechaFinalOferta;
		
		/** @ORM\Column(name="edadPublicoOfertas", type="string", length=45, nullable=true) */
		private $edadPublicoOfertas;

		/** @ORM\Column(name="descripcionOferta", type="string", length=500, nullable=false) */
		private $descripcionOfertas;

		/** @ORM\Column(name="idProductos", type="integer", length=11, nullable=false) */
		private $idProducto;
		

		/**
		* @ORM\ManyToOne(targetEntity="Producto", inversedBy="producto")
		* @ORM\JoinColumn(name="idProductos", referencedColumnName="idProductos")
		*/
		private $Producto;
		

		/**
		* @ORM\OneToMany(targetEntity="OfertasCliente", mappedBy="ofertas")
		*/
		private $ofertascliente;
		
		
		
		public function __construct(){
			$this->ofertascliente = new ArrayCollection();		
		}
		
		
		/**
		* Get idOfertas
		*
		* @ORM\return integer 
		*/	
		public function getIdOfertas()
		{
			return $this->idOfertas;
		}
		
		/**
		* Set idOfertas
		*
		* @ORM\return integer 
		*/	
		public function setIdOfertas($value)
		{
			$this->idOfertas = $value;
		}
		
		
		
		/**
		* Get fechaInicialOferta
		*
		* @ORM\return date 
		*/	
		public function getFechaInicialOferta()
		{
			return $this->fechaInicialOferta;
		}
		
		/**
		* Set fechaInicialOferta
		*
		* @ORM\return date 
		*/	
		public function setFechaInicialOferta($value)
		{
			$this->fechaInicialOferta = $value;
		}





		/**
		* Get fechaFinalOferta
		*
		* @ORM\return date 
		*/	
		public function getFechaFinalOferta()
		{
			return $this->fechaFinalOferta;
		}
		
		/**
		* Set fechaFinalOferta
		*
		* @ORM\return date 
		*/	
		public function setFechaFinalOferta($value)
		{
			$this->fechaFinalOferta = $value;
		}



		
		
		
		
		/**
		* Get edadPublicoOfertas
		*
		* @ORM\return string 
		*/	
		public function getEdadPublicoOfertas()
		{
			return $this->edadPublicoOfertas;
		}
		
		/**
		* Set edadPublicoOfertas
		*
		* @ORM\return string 
		*/	
		public function setEdadPublicoOfertas($value)
		{
			$this->edadPublicoOfertas = $value;
		}
		
		
		
		
		/**
		* Get descripcionOfertas
		*
		* @ORM\return string 
		*/	
		public function getDescripcionOfertas()
		{
			return $this->descripcionOfertas;
		}
		
		/**
		* Set descripcionOfertas
		*
		* @ORM\return string 
		*/	
		public function setDescripcionOfertas($value)
		{
			$this->descripcionOfertas = $value;
		}
		
		
		
		/**
		* Set idProducto
		*
		* @ORM\param integer $value
		*/	
		public function getIdProducto()
		{
			return $this->idProducto;
		}

		/**
		* Set idProducto
		*
		* @ORM\param integer $value
		*/
		public function setIdProducto($value){
			$this->idProducto = $value;
		}



		
		
		
		
		/**
		* Get Producto
		*
		* @ORM\return PDOCTRINE\Entidades\Producto 		
		*/			
		public function getProducto()
		{
			return $this->Producto;
		}

		/**
		* Set Producto
		*
		* @ORM\param PDOCTRINE\Entidades\Producto $value
		*/	
		public function setProducto($value)
		{
			$this->Producto = $value;
		}






		public function addOfertasCliente(OfertasCliente $ofertascliente)
		{
			$ofertascliente->setOfertasCliente($this);
			$this->ofertascliente[] = $ofertascliente;
			return $this;
		}

		public function removeOfertasCliente(OfertasCliente $ofertascliente)
		{
			$this->ofertascliente->removeElement($ofertascliente);
		}




		
	}

?>
