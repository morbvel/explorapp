<?php
	namespace explorapp\PCBundle\Form;

	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Form\AbstractType; //de aqui heredan todos los formularios de symfony
	use Symfony\Component\Form\FormBuilderInterface;

	class PerfilProductoForm extends AbstractType
	{
	    public function buildForm(FormBuilderInterface $builder, array $options)
	    {
		$builder
			->add('nombreProducto','text',array('required'=>false, 'label'=>'Nombre del Producto', 'attr'=>array('placeholder'=>'Nombre del Producto')))
			->add('descripcionProducto', 'text', array('required'=>false, 'label'=>'Descripción del Producto', 'attr'=>array('placeholder'=>'Descripción del Producto')))
			->add('precioProducto', 'integer', array('required'=>false, 'label'=>'Precio del Producto', 'attr'=>array('placeholder'=>'Precio del Producto')))
			->add('alergenosProducto', 'text', array('required'=>false, 'label'=>'Alérgernos del Producto', 'attr'=>array('placeholder'=>'Alérgernos del Producto')));
	    }

	    public function getName()
	    {
		return 'formuEditarPerfilProducto';
	    }
	}
