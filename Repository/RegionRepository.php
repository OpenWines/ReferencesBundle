<?php

namespace OpenWines\ReferencesBundle\Repository;

/**
 * Class RegionRepository
 * @package OpenWines\WebAppBundle\Repository
 */
class RegionRepository extends BaseRepository
{

    /**
     * used in DQL expressions
     */
    const QUERY_ALIAS = 'r';

    /** ************* */
    /** F I N D E R S */

    /** *************** */
    /** B U I L D E R S */

    /**
     * @return Doctrine\ORM\QueryBuilder
     */
    public function getRegionsWithLabels()
    {
        return $this->em->createQueryBuilder()
            ->from('OpenWinesReferencesBundle:Region', 'r')
            ->select('r')
            // ->where(...)
            // ->join(...)
            // ->orderBy(...)
            ;
    }
}
