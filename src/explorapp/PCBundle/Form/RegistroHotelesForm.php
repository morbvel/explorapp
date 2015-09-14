<?php
	namespace explorapp\PCBundle\Form;

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Form\AbstractType; //de aqui heredan todos los formularios de symfony
	use Symfony\Component\Form\FormBuilderInterface;

	class RegistroHotelesForm extends AbstractType
	{
	    public function buildForm(FormBuilderInterface $builder, array $options)
	    {
		$builder
			->add('nombreNegocio','text',array('required'=>true, 'label'=>'Nombre del Hotel', 'attr'=>array('placeholder'=>'Nombre del Hotel')))
			->add('direccionNegocio', 'text', array('required'=>true, 'label'=>'Dirección del Hotel', 'attr'=>array('placeholder'=>'Dirección del Hotel')))
			->add('ciudadNegocio', 'text', array('required'=>true, 'label'=>'Ciudad del Hotel', 'attr'=>array('placeholder'=>'Ciudad del Hotel')))
			->add('telefonoNegocio', 'number', array('required'=>false, 'label'=>'Teléfono del Hotel', 'attr'=>array('placeholder'=>'Teléfono del Hotel')))
			->add('correoNegocio', 'text', array( 'required' => true, 'label'=>'Correo del Hotel', 'attr'=>array('placeholder'=>'Correo del Hotel') ));
	    }

	    public function getName()
	    {
		return 'formNuevoRegistroHoteles';
	    }
	}
