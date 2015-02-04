<?php

namespace DV\Bundle\CatalogBundle\Entity;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomOption;

/**
 * Custom designer entity
 */
class Designer extends AbstractTranslatableCustomOption
{
    /**
     * {@inheritdoc}
     */
    public function getTranslationFQCN()
    {
        return 'DV\Bundle\CatalogBundle\Entity\DesignerTranslation';
    }
}
