<?php

namespace App\Repositories\Eloquent;

use App\Ad;
use App\Repositories\AdRepositoryInterface;

/**
 * Class AdRepository
 * @package App\Repository\Eloquent
 */
class AdRepository extends Repository implements AdRepositoryInterface
{
    /**
     * AdRepository constructor.
     * @param Ad $model
     */
    public function __construct(Ad $model)
    {
        parent::__construct($model);
    }

    /**
     * @return mixed
     */
    public function getMostRelevant(): ?Ad
    {
        return
            $this->model
                ->whereRaw('current_views < amount')
                ->orderBy('price', 'desc')
                ->first();
    }
}
