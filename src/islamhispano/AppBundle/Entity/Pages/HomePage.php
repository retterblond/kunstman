<?php

namespace islamhispano\AppBundle\Entity\Pages;

use islamhispano\AppBundle\Form\Pages\HomePageAdminType;
use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\NodeSearchBundle\Helper\SearchTypeInterface;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;

/**
 * HomePage
 *
 * @ORM\Entity()
 * @ORM\Table(name="islamhispano_appbundle_home_pages")
 */
class HomePage extends AbstractPage implements HasPageTemplateInterface, SearchTypeInterface
{
    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new HomePageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array(
            array(
                'name'  => 'ContentPage',
                'class' => 'islamhispano\AppBundle\Entity\Pages\ContentPage'
            ),
            array(
                'name'  => 'BehatTestPage',
                'class' => 'islamhispano\AppBundle\Entity\Pages\BehatTestPage'
            )
        );
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
		    return array('islamhispanoAppBundle:main');
	    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
	return array('islamhispanoAppBundle:homepage');
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return 'islamhispanoAppBundle:Pages\HomePage:view.html.twig';
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchType()
    {
	return 'Home';
    }
}
