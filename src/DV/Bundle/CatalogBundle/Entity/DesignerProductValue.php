<?php

namespace DV\Bundle\CatalogBundle\Entity;

use Pim\Bundle\CatalogBundle\Model\AbstractProductValue;
use JMS\Serializer\Annotation\ExclusionPolicy;

/**
 * Overrides ProductValue to add the designer backend type
 *
 * @ExclusionPolicy("all")
 */
class DesignerProductValue extends AbstractProductValue
{
    /**
     * @var Designer
     */
    protected $designer;
    /**
     * Returns the designer
     *
     * @return Designer
     */
    public function getDesigner()
    {
        return $this->designer;
    }
    /**
     * Sets designer
     *
     * @param Designer $designer
     *
     * @return DesignerProductValue
     */
    public function setDesigner(Designer $designer)
    {
        $this->designer = $designer;

        return $this;
    }
}