<?php
	namespace explorapp\PCBundle\Form;

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Form\AbstractType; //de aqui heredan todos los formularios de symfony
	use Symfony\Component\Form\FormBuilderInterface;

	class PerfilUsuarioForm extends AbstractType
	{
	    public function buildForm(FormBuilderInterface $builder, array $options)
	    {
		$builder
			->add('nombrePersonal','text',array('required'=>false, 'label'=>'Nombre Personal', 'attr'=>array('placeholder'=>'Nombre Personal')))
			->add('apellido1Personal', 'text', array('required'=>false, 'label'=>'Primer Apellido', 'attr'=>array('placeholder'=>'Primer Apellido')))
			->add('apellido2Personal', 'text', array('required'=>false, 'label'=>'Segundo Apellido', 'attr'=>array('placeholder'=>'Segundo Apellido')))
			->add('sexoPersonal', 'choice', array( 'choices' => array( 'h' => 'Hombre', 'm' => 'Mujer' ), 'required' => false, 'label'=>'Sexo', 'attr'=>array('placeholder'=>'Sexo') ))
			->add('fechaNacimientoPersonal', 'date', array('required'=>false, 'label'=>'Fecha de Nacimiento', 'attr'=>array('placeholder'=>'Fecha de Nacimiento')))
			->add('DNIPersonal', 'text', array('required'=>false, 'label'=>'DNI Personal', 'attr'=>array('placeholder'=>'DNI Personal')))
			->add('telefonoPersonal', 'text', array('required'=>false, 'label'=>'Teléfono Personal', 'attr'=>array('placeholder'=>'Teléfono Personal')))
			->add('correoPersonal', 'text', array('required'=>false, 'label'=>'Correo Personal', 'attr'=>array('placeholder'=>'Correo Personal')));
	    }

	    public function getName()
	    {
		return 'formuEditarPerfilUsuario';
	    }
	}
