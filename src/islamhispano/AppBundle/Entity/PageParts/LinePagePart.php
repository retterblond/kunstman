<?php

namespace islamhispano\AppBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;

/**
 * LinePagePart
 *
 * @ORM\Table(name="islamhispano_appbundle_line_page_parts")
 * @ORM\Entity
 */
class LinePagePart extends AbstractPagePart
{
    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
	return 'islamhispanoAppBundle:PageParts:LinePagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \islamhispano\AppBundle\Form\PageParts\LinePagePartAdminType
     */
    public function getDefaultAdminType()
    {
	return new \islamhispano\AppBundle\Form\PageParts\LinePagePartAdminType();
    }
}
