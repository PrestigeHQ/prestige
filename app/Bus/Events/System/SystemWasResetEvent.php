<?php declare(strict_types=1);

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\System;

/**
 * This is the system was reset event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class SystemWasResetEvent implements SystemEventInterface
{
    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'System was reset.';
    }
}
