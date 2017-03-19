<?php

namespace OpenWines\ReferencesBundle\Entity;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;

/**
 * ReferenceEntity
 *
 * @author    Ronan Guilloux <ronan.guilloux@gmail.com>
 * @copyright 2017 OpenWines
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ReferenceEntity extends AbstractCustomEntity
{
    /**
     * @var string
     */
    protected $name;

    /**
     * {@inheritdoc}
     */
    public function getCustomEntityName()
    {
        return mb_strtolower(join('', array_slice(explode('\\', get_called_class()), -1)));
    }

    /**
     * @return $this
     */
    public function prePersist() {
        $this->setUpdated(new \DateTime());
        return $this;
    }

    /**
     * @return $this
     */
    public function postPersist() {
        $this->setUpdated(new \DateTime());
        return $this;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return ReferenceEntity
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}
