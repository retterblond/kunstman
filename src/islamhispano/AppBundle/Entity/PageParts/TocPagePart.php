<?php

namespace islamhispano\AppBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * TocPagePart
 *
 * @ORM\Table(name="islamhispano_appbundle_toc_page_parts")
 * @ORM\Entity
 */
class TocPagePart extends AbstractPagePart
{
    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
	return 'islamhispanoAppBundle:PageParts:TocPagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \islamhispano\AppBundle\Form\PageParts\TocPagePartAdminType
     */
    public function getDefaultAdminType()
    {
	return new \islamhispano\AppBundle\Form\PageParts\TocPagePartAdminType();
    }
}
