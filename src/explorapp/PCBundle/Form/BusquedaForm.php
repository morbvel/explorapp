<?php
	namespace explorapp\PCBundle\Form;

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Form\AbstractType; //de aqui heredan todos los formularios de symfony
	use Symfony\Component\Form\FormBuilderInterface;

	class BusquedaForm extends AbstractType
	{
	    public function buildForm(FormBuilderInterface $builder, array $options)
	    {
		$builder
			->add('datoNegocio','text', array('required'=>true, 'label'=>'Nombre o ciudad del Negocio', 'attr'=>array('placeholder'=>'Nombre o ciudad del Negocio')))
			->getForm();
	    }

	    public function getName()
	    {
		return 'formBusqueda';
	    }
	}
