<?php

namespace DV\Bundle\EnrichBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class DesignerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('code')
                ->add('label', 'translatable_field', ['field' => 'label',
                                                      'translation' => 'DV\Bundle\CatalogBundle\Entity\DesignerTranslation',
                                                      'entity_class' => $option['data_class'],
                                                      'property_path' => 'translations',
                ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'dv_enrich_designer';
    }
}