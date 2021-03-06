<?php
	namespace explorapp\PCBundle\Form;

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Form\AbstractType; //de aqui heredan todos los formularios de symfony
	use Symfony\Component\Form\FormBuilderInterface;

	class PerfilNegocioForm extends AbstractType
	{
	    public function buildForm(FormBuilderInterface $builder, array $options)
	    {
		$builder
			->add('nombreNegocio','text',array('required'=>false, 'label'=>'Nombre del Negocio', 'attr'=>array('placeholder'=>'Nombre del Negocio')))
			->add('direccionNegocio', 'text', array('required'=>false, 'label'=>'Direccion del Negocio', 'attr'=>array('placeholder'=>'Dirección del Negocio')))
			->add('ciudadNegocio', 'text', array('required'=>false, 'label'=>'Ciudad del Negocio', 'attr'=>array('placeholder'=>'Ciudad del Negocio')))
			->add('telefonoNegocio', 'text', array('required'=>false, 'label'=>'Telefono del Negocio', 'attr'=>array('placeholder'=>'Teléfono del Negocio')))
			->add('correoNegocio', 'text', array('required'=>false, 'label'=>'Correo del Negocio', 'attr'=>array('placeholder'=>'Correo del Negocio')));
	    }

	    public function getName()
	    {
		return 'formuEditarPerfilNegocio';
	    }
	}
