<?php

namespace OpenWines\ReferencesBundle\Model;

use OpenWines\ReferencesBundle\Entity\Appellation;
use OpenWines\ReferencesBundle\Entity\Region;
use Pim\Component\Catalog\Model\ProductValue as PimProductValue;

/**
 * Overrides the product value so it takes new custom entities into account.
 */
class ProductValue extends PimProductValue
{
    /** @var Appellation */
    private $appellation;

    /**
     * @return Appellation
     */
    public function getAppellation()
    {
        return $this->appellation;
    }

    /**
     * @param Appellation|null $appellation
     *
     * @return ProductValue
     */
    public function setAppellation(Appellation $appellation = null)
    {
        $this->appellation = $appellation;

        return $this;
    }

    /** @var Region */
    private $region;

    /**
     * @return Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param Region|null $region
     *
     * @return ProductValue
     */
    public function setRegion(Region $region = null)
    {
        $this->region = $region;

        return $this;
    }
}
