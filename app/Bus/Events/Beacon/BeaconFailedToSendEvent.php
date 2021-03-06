<?php declare(strict_types=1);

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\Beacon;

/**
 * This is the beacon failed to send event.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class BeaconFailedToSendEvent implements BeaconEventInterface
{
    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Beacon failed to send.';
    }
}
