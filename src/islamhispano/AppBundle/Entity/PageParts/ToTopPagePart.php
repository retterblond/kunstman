<?php

namespace islamhispano\AppBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * ToTopPagePart
 *
 * @ORM\Table(name="islamhispano_appbundle_to_top_page_parts")
 * @ORM\Entity
 */
class ToTopPagePart extends AbstractPagePart
{
    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
	return 'islamhispanoAppBundle:PageParts:ToTopPagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \islamhispano\AppBundle\Form\PageParts\ToTopPagePartAdminType
     */
    public function getDefaultAdminType()
    {
	return new \islamhispano\AppBundle\Form\PageParts\ToTopPagePartAdminType();
    }
}
