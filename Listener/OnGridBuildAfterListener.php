<?php

namespace OpenWines\ReferencesBundle\Listener;

use Oro\Bundle\DataGridBundle\Event\BuildAfter;

/**
 * OnGridBuildAfterListener
 *
 * @author    Ronan Guilloux <ronan.guilloux@gmail.com>
 * @copyright 2017 OpenWines
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
class OnGridBuildAfterListener
{
    public function onBuildAfter(BuildAfter $event)
    {
        $config = $event->getDatagrid();
        die(dump($config));

        return;
    }
}
