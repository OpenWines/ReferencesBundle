<?php

namespace OpenWines\ReferencesBundle\Form\Type;

use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * RegionType.
 *
 * @author    Ronan Guilloux <ronan.guilloux@gmail.com>
 * @copyright 2017 OpenWines
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class RegionType extends AbstractType implements ContainerAwareInterface
{
    use ContainerAwareTrait;
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
        $this->regionOptions = $this->container->getParameter('regions');
        $builder->add('name');
        $builder->add('description', 'textarea');
        $builder->add('departments');
        $builder->add('area', 'number');
        $builder->add('type',
            'choice', [
                'choices' => $this->regionOptions['types'],
                'choices_as_values' => false,
            ]
        );
        $builder->add('wikipedia_url', 'url');
        $builder->add('wikidata_url', 'url');
        $builder->add('image_url', 'url');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'openwines_region';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return 'pim_custom_entity';
    }

    public function getTypes()
    {
        return $this->container->getParameter('regions');
    }
}
