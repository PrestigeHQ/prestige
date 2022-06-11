<?php declare(strict_types=1);

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

/**
 * This is the sortable trait.
 *
 * @author James Brooks <james@alt-three.com>
 */
trait SortableTrait
{
    /**
     * Adds a sort scope.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string                                $column
     * @param string                                $direction
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSort(Builder $query, string $column, string $direction): Builder
    {
        if (!in_array($column, $this->sortable)) {
            return $query;
        }

        return $query->orderBy($column, $direction);
    }
}
