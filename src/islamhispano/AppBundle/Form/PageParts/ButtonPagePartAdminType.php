<?php

namespace islamhispano\AppBundle\Form\PageParts;

use islamhispano\AppBundle\Entity\PageParts\ButtonPagePart;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

/**
 * ButtonPagePartAdminType
 */
class ButtonPagePartAdminType extends AbstractType
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

	$builder->add('linkUrl', 'urlchooser', array(
	    'required' => true
	));
	$builder->add('linkText', 'text', array(
	    'required' => true
	));
	$builder->add('linkNewWindow', 'checkbox', array(
	    'required' => false,
	));
	$builder->add('type', 'choice', array(
	    'choices' => array_combine(ButtonPagePart::$types, ButtonPagePart::$types),
	    'empty_value' => false,
	    'required' => true
	));
	$builder->add('size', 'choice', array(
	    'choices' => array_combine(ButtonPagePart::$sizes, ButtonPagePart::$sizes),
	    'empty_value' => false,
	    'required' => true
	));
	$builder->add('position', 'choice', array(
	    'choices' => array_combine(ButtonPagePart::$positions, ButtonPagePart::$positions),
	    'empty_value' => false,
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
	return 'buttonpageparttype';
    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolverInterface $resolver The resolver for the options.
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
	$resolver->setDefaults(array(
	    'data_class' => '\islamhispano\AppBundle\Entity\PageParts\ButtonPagePart'
	));
    }
}
