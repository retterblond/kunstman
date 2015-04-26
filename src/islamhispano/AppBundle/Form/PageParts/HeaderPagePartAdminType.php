<?php

namespace islamhispano\AppBundle\Form\PageParts;

use islamhispano\AppBundle\Entity\PageParts\HeaderPagePart;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

/**
 * HeaderPagePartAdminType
 */
class HeaderPagePartAdminType extends AbstractType
{
    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting form the
     * top most type. Type extensions can further modify the form.
     * @param FormBuilderInterface $builder The form builder
     * @param array $options The options
     *
     * @see FormTypeExtensionInterface::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
	parent::buildForm($builder, $options);

	$names = HeaderPagePart::$supportedHeaders;
	array_walk($names, function(&$item) { $item = 'Header ' . $item; });

	$builder->add('niv', 'choice', array(
	    'label' => 'pagepart.header.type',
	    'choices' => array_combine(HeaderPagePart::$supportedHeaders, $names),
	    'required' => true
	));
	$builder->add('title', 'text', array(
	    'label' => 'pagepart.header.title',
	    'required' => true
	));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
	return 'headerpageparttype';
    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolverInterface $resolver The resolver for the options.
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
	$resolver->setDefaults(array(
	    'data_class' => '\islamhispano\AppBundle\Entity\PageParts\HeaderPagePart'
	));
    }
}
