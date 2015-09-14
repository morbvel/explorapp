<?php

	namespace explorapp\PCBundle\Entity;

	use Doctrine\Common\Collections\ArrayCollection;
	use Doctrine\ORM\Mapping as ORM;

	/**
	 * @ORM\Entity
	 * @ORM\Table(name="datospersonales")
	 */

	 class DatosPersonales{
		/** 
		* @ORM\ID
		* @ORM\GeneratedValue(strategy="IDENTITY")
		* @ORM\Column(name="idDatosPersonales", type="integer") 
		*/
		private $idDatosPersonales;
		
		/** @ORM\Column(name="nombrePersonal", type="string", length=45, nullable=false) */
		private $nombrePersonal;
		
		/** @ORM\Column(name="apellido1Personal", type="string", length=45, nullable=false) */
		private $apellido1Personal;
		
		/** @ORM\Column(name="apellido2Personal", type="string", length=45, nullable=true) */
		private $apellido2Personal;
		
		/** @ORM\Column(name="sexoPersonal", type="string", length=45, nullable=true) */
		private $sexoPersonal;
		
		/** @ORM\Column(name="fechaNacimientoPersonal", type="date", nullable=false) */
		private $fechaNacimientoPersonal;
		
		/** @ORM\Column(name="DNIPersonal", type="string", length=45, nullable=true) */
		private $DNIPersonal;
		
		/** @ORM\Column(name="telefonoPersonal", type="string", length=45, nullable=false) */
		private $telefonoPersonal;

		/** @ORM\Column(name="correoPersonal", type="string", length=45, nullable=true) */
		private $correoPersonal;
		
		/** @ORM\Column(name="direccionPersonal", type="string", length=45, nullable=true) */
		private $direccionPersonal;
		
		/** @ORM\Column(name="idUsuario", type="string", length=45, nullable=true) */
		private $idUsuario;
		
		
		/**
		* @ORM\OneToOne(targetEntity="Usuarios", inversedBy="datosPersonales")
		* @ORM\JoinColumn(name="idUsuario", referencedColumnName="idUsuario")
		*/
		private $Usuarios;
		
		
		
		public function __construct(){		
		}
		
		
		/**
		 * Get idDatosPersonales
		 *
		 * @return integer 
		 */	
		public function getID()
		{
			return $this->idDatosPersonales;
		}
		
		/**
		* Set idDatosPersonales
		*
		* @param int $value
		*/
		public function setID($value){
			$this->idDatosPersonales = $value;
		}
		
		
		/**
		 * Get nombrePersonal
		 *
		 * @return string 
		 */	
		public function getNombrePersonal()
		{
			return $this->nombrePersonal;
		}
		
		/**
		* Set nombrePersonal
		*
		* @param string $value
		*/
		public function setNombrePersonal($value){
			$this->nombrePersonal = $value;
		}
		
		
		/**
		 * Get apellido1Personal
		 *
		 * @return string 
		 */	
		public function getApellido1Personal()
		{
			return $this->apellido1Personal;
		}
		
		/**
		* Set apellido1Personal
		*
		* @param string $value
		*/
		public function setApellido1Personal($value){
			$this->apellido1Personal = $value;
		}
		
		
		
		/**
		 * Get apellido2Personal
		 *
		 * @return string 
		 */	
		public function getApellido2Personal()
		{
			return $this->apellido2Personal;
		}
		
		/**
		* Set apellido2Personal
		*
		* @param string $value
		*/
		public function setApellido2Personal($value){
			$this->apellido2Personal = $value;
		}
		
		
		
		/**
		 * Get sexoPersonal
		 *
		 * @return string 
		 */	
		public function getSexoPersonal()
		{
			return $this->sexoPersonal;
		}
		
		/**
		* Set sexoPersonal
		*
		* @param string $value
		*/
		public function setSexoPersonal($value){
			$this->sexoPersonal = $value;
		}
		
		
		
		/**
		 * Get fechaNacimientoPersonal
		 *
		 * @return date 
		 */	
		public function getFechaNacimientoPersonal()
		{
			return $this->fechaNacimientoPersonal;
		}
		
		/**
		* Set fechaNacimientoPersonal
		*
		* @param date $value
		*/
		public function setFechaNacimientoPersonal($value){
			$this->fechaNacimientoPersonal = $value;
		}
		
		
		
		/**
		 * Get DNIPersonal
		 * @return string 
		 */	
		public function getDNIPersonal()
		{
			return $this->DNIPersonal;
		}
		
		/**
		* Set DNIPersonal
		*
		* @param string $value
		*/
		public function setDNIPersonal($value){
			$this->DNIPersonal = $value;
		}
		
		
		/**
		 * Get telefonoPersonal
		 * @return int 
		 */	
		public function getTelefonoPersonal()
		{
			return $this->telefonoPersonal;
		}
		
		/**
		* Set telefonoPersonal
		*
		* @param int $value
		*/
		public function setTelefonoPersonal($value){
			$this->telefonoPersonal = $value;
		}
		
		
		/**
		 * Get correoPersonal
		 * @return string 
		 */	
		public function getCorreoPersonal()
		{
			return $this->correoPersonal;
		}
		
		/**
		* Set correoPersonal
		*
		* @param string $value
		*/
		public function setCorreoPersonal($value){
			$this->correoPersonal = $value;
		}
		
		
		
		/**
		 * Get direccionPersonal
		 * @return string 
		 */	
		public function getDireccionPersonal()
		{
			return $this->direccionPersonal;
		}
		
		/**
		* Set direccionPersonal
		*
		* @param string $value
		*/
		public function setDireccionPersonal($value){
			$this->direccionPersonal = $value;
		}
		
		
		/**
		* Set idUsuario
		*
		* @param PDOCTRINE\Entidades\Usuarios $value
		*/	
		public function getIdUsuario()
		{
			return $this->idUsuario;
		}

		/**
		* Set idUsuario
		*
		* @param integer $value
		*/
		public function setIdUsuario($value){
			$this->idUsuario = $value;
		}
		
		
		/**
		* Get Usuarios
		*
		* @return PDOCTRINE\Entidades\Usuarios 		
		*/			
		public function getUsuarios()
		{
			return $this->Usuarios;
		}

		/**
		* Set Usuarios
		*
		* @param PDOCTRINE\Entidades\Usuarios $value
		*/	
		public function setUsuarios($value)
		{
			$this->Usuarios = $value;
		}		
	}
?>
