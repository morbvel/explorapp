<?php
namespace explorapp\PCBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="ofertas_has_usuarios")
 */
 
 class OfertasCliente
 {
	/**
        * @ORM\Id
        * @ORM\ManyToOne(targetEntity="Usuarios", inversedBy="ofertascliente")
        * @ORM\JoinColumns({
        *   @ORM\JoinColumn(name="idUsuario", referencedColumnName="idUsuario", nullable=false)
        * })
        */
        private $usuarios;


	/**
        * @ORM\Id
        * @ORM\ManyToOne(targetEntity="Oferta", inversedBy="ofertascliente")
        * @ORM\JoinColumns({
        *   @ORM\JoinColumn(name="idOfertas", referencedColumnName="idOfertas", nullable=false)
        * })
        */
        private $ofertas;



	// Atributos propios
        /**
        * @var date
        *
        * @ORM\Column(name="fechaOfertaCliente", type="string", length=45, nullable=true)
        */
        private $fechaOfertaCliente;





		/**
		* Get ofertas
		*
		* @ORM\return integer 
		*/	
		public function getOfertas()
		{
			return $this->ofertas;
		}
		
		/**
		* Set ofertas
		*
		* @ORM\return integer 
		*/	
		public function setOfertas($value)
		{
			$this->ofertas = $value;
		}




		/**
		* Get usuarios
		*
		* @ORM\return integer 
		*/	
		public function getUsuarios()
		{
			return $this->usuarios;
		}
		
		/**
		* Set usuarios
		*
		* @ORM\return integer 
		*/	
		public function setUsuarios($value)
		{
			$this->usuarios = $value;
		}






		/**
		* Get fechaOfertaCliente
		*
		* @ORM\return string 
		*/	
		public function getFechaOfertaCliente()
		{
			return $this->fechaOfertaCliente;
		}
		
		/**
		* Set fechaOfertaCliente
		*
		* @ORM\return string 
		*/	
		public function setFechaOfertaCliente($value)
		{
			$this->fechaOfertaCliente = $value;
		}

	
 }
?>
