<?php
	namespace explorapp\PCBundle\Form;

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Form\AbstractType; //de aqui heredan todos los formularios de symfony
	use Symfony\Component\Form\FormBuilderInterface;

	class RegistroOfertasForm extends AbstractType
	{
	    public function buildForm(FormBuilderInterface $builder, array $options)
	    {
		$builder
			->add('fechaInicialOfertas','date',array('years' => range(1950, 2050), 'required'=>false, 'label'=>'Fecha Inicial de la Oferta', 'attr'=>array('placeholder'=>'Fecha Inicial de la Oferta')))
			->add('fechaFinalOfertas', 'date', array('years' => range(1950, 2050), 'required'=>false, 'label'=>'Fecha Final de la Oferta', 'attr'=>array('placeholder'=>'Fecha Final de la Oferta')))
			->add('edadPublicoOfertas', 'text', array('required'=>false, 'label'=>'Edad del Público de la Oferta', 'attr'=>array('placeholder'=>'Edad del Público de la Oferta')))
			->add('descripcionOfertas', 'text', array('required'=>true, 'label'=>'Descripción de la Oferta', 'attr'=>array('placeholder'=>'Descripción de la Oferta')));
	    }

	    public function getName()
	    {
		return 'formNuevoRegistroOfertas';
	    }
	}
