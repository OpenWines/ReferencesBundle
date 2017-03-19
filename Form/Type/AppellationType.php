<?php

namespace OpenWines\ReferencesBundle\Form\Type;

use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * AppellationType.
 *
 * @author    Ronan Guilloux <ronan.guilloux@gmail.com>
 * @copyright 2017 OpenWines
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class AppellationType extends AbstractType implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * @var array
     */
    var $appellationOptions = [];
    var $wineOptions = [];

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->appellationOptions = $this->container->getParameter('appellations');
        $this->wineOptions = $this->container->getParameter('wines');
        $builder->add('name');
        $builder->add('appellation_type',
            'choice', [
                'choices' => $this->appellationOptions['types'],
                'choices_as_values' => true,
            ]
        );
        $builder->add('area', 'integer');
        $builder->add('annual_production_quantity', 'integer');
        $builder->add('soil');
        $builder->add('wine_sweetness',
            'choice', [
                'choices' => $this->wineOptions['sweetness'],
                'choices_as_values' => true,
            ]
        );
        $builder->add('wine_color',
            'choice', [
                'choices' => $this->wineOptions['colors'],
                'choices_as_values' => true,
            ]
        );
        $builder->add('varietals', 'entity', [
            'class' => 'OpenWines\ReferencesBundle\Entity\Varietal',
            'property' => 'name',
            'expanded' => true,
            'multiple' => true,
        ]);
        $builder->add('description', 'textarea');
        $builder->add('odg_name');
        $builder->add('odg_url', 'url');
        $builder->add('wikipedia_url', 'url');
        $builder->add('wikidata_url', 'url');
        $builder->add('image_url', 'url');
        $builder->add('creation_year', 'integer');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'openwines_appellation';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return 'pim_custom_entity';
    }
}