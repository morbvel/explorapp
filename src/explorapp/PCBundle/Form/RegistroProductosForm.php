<?php
	namespace explorapp\PCBundle\Form;

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Form\AbstractType; //de aqui heredan todos los formularios de symfony
	use Symfony\Component\Form\FormBuilderInterface;

	class RegistroProductosForm extends AbstractType
	{
	    public function buildForm(FormBuilderInterface $builder, array $options)
	    {
		$builder
			->add('nombreProducto','text',array('required'=>true, 'label'=>'Nombre del Prodcuto', 'attr'=>array('placeholder'=>'Nombre del Producto')))
			->add('descripcionProducto', 'text', array('required'=>true, 'label'=>'Descripción del Producto', 'attr'=>array('placeholder'=>'Descripción del Producto')))
			->add('precioProducto', 'number', array('required'=>true, 'label'=>'Precio del Producto', 'attr'=>array('placeholder'=>'Precio del Producto')))
			->add('alergenosProducto', 'text', array('required'=>false, 'label'=>'Alérgenos del Producto', 'attr'=>array('placeholder'=>'Alérgenos del Producto')));
	    }

	    public function getName()
	    {
		return 'formNuevoRegistroProducto';
	    }
	}
