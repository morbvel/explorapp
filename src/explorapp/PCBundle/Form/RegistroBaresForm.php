<?php
	namespace explorapp\PCBundle\Form;

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Form\AbstractType; //de aqui heredan todos los formularios de symfony
	use Symfony\Component\Form\FormBuilderInterface;

	class RegistroBaresForm extends AbstractType
	{
	    public function buildForm(FormBuilderInterface $builder, array $options)
	    {
		$builder
			->add('nombreNegocio','text',array('required'=>true, 'label'=>'Nombre del Bar', 'attr'=>array('placeholder'=>'Nombre del Bar')))
			->add('direccionNegocio', 'text', array('required'=>true, 'label'=>'Dirección del Bar', 'attr'=>array('placeholder'=>'Dirección del Bar')))
			->add('ciudadNegocio', 'text', array('required'=>true, 'label'=>'Ciudad del Bar', 'attr'=>array('placeholder'=>'Ciudad del Bar')))
			->add('telefonoNegocio', 'number', array('required'=>false, 'label'=>'Teléfono del Bar', 'attr'=>array('placeholder'=>'Teléfono del Bar')))
			->add('correoNegocio', 'text', array( 'required' => true, 'label'=>'Correo del Bar', 'attr'=>array('placeholder'=>'Correo del Bar') ));
	    }

	    public function getName()
	    {
		return 'formNuevoRegistroBar';
	    }
	}
