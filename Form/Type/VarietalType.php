<?php

namespace OpenWines\ReferencesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * VarietalType.
 *
 * @author    Ronan Guilloux <ronan.guilloux@gmail.com>
 * @copyright 2017 OpenWines
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class VarietalType extends AbstractType
{
    /**
     * @var array
     */
    var $regionOptions = [];

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('family');
        $builder->add('area', 'integer');
        $builder->add('description', 'textarea');
        $builder->add('wikipedia_url', 'url');
        $builder->add('wikidata_url', 'url');
        $builder->add('image_url', 'url');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'openwines_varietal';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return 'pim_custom_entity';
    }
}
