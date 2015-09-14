<?php
	namespace explorapp\PCBundle\Form;

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Form\AbstractType; //de aqui heredan todos los formularios de symfony
	use Symfony\Component\Form\FormBuilderInterface;

	class RegistroRestaurantesForm extends AbstractType
	{
	    public function buildForm(FormBuilderInterface $builder, array $options)
	    {
		$builder
			->add('nombreNegocio','text',array('required'=>true, 'label'=>'Nombre del Restaurante', 'attr'=>array('placeholder'=>'Nombre del Restaurante')))
			->add('direccionNegocio', 'text', array('required'=>true, 'label'=>'Dirección del Restaurante', 'attr'=>array('placeholder'=>'Dirección del Restaurante')))
			->add('ciudadNegocio', 'text', array('required'=>true, 'label'=>'Ciudad del Restaurante', 'attr'=>array('placeholder'=>'Ciudad del Restaurante')))
			->add('telefonoNegocio', 'number', array('required'=>false, 'label'=>'Teléfono del Restaurante', 'attr'=>array('placeholder'=>'Teléfono del Restaurante')))
			->add('correoNegocio', 'text', array( 'required' => true, 'label'=>'Correo del Restaurante', 'attr'=>array('placeholder'=>'Correo del Restaurante') ));
	    }

	    public function getName()
	    {
		return 'formNuevoRegistroRestaurantes';
	    }
	}
