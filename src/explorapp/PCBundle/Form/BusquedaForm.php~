<?php
	namespace explorapp\PCBundle\Form;

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Form\AbstractType; //de aqui heredan todos los formularios de symfony
	use Symfony\Component\Form\FormBuilderInterface;

	class UsuariosForm extends AbstractType
	{
	    public function buildForm(FormBuilderInterface $builder, array $options)
	    {
		$builder
			->add('userName','text', array('required'=>false, 'label'=>'Nombre de Usuario', 'attr'=>array('placeholder'=>'Nombre de Usuario')))
			->add('userPass', 'password', array('required'=>false, 'label'=>'Contraseña', 'attr'=>array('placeholder'=>'Contraseña')))
			->getForm();
	    }

	    public function getName()
	    {
		return 'formuLogin';
	    }
	}
