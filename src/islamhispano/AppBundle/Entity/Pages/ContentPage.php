<?php

namespace islamhispano\AppBundle\Entity\Pages;

use islamhispano\AppBundle\Form\Pages\ContentPageAdminType;
use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\NodeSearchBundle\Helper\SearchTypeInterface;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;

/**
 * ContentPage
 *
 * @ORM\Entity()
 * @ORM\Table(name="islamhispano_appbundle_content_pages")
 */
class ContentPage extends AbstractPage  implements HasPageTemplateInterface, SearchTypeInterface
{
    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new ContentPageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array (
            array(
                'name'  => 'ContentPage',
                'class' => 'islamhispano\AppBundle\Entity\Pages\ContentPage'
            ),
	);
    }


    /**
     * {@inheritdoc}
     */
    public function getSearchType()
    {
	return 'Page';
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
	return array('islamhispanoAppBundle:contentpage');
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return 'islamhispanoAppBundle:Pages\ContentPage:view.html.twig';
    }
}
