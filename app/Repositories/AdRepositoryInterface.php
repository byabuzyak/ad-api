<?php

namespace App\Repositories;

use App\Ad;

/**
 * Interface AdRepositoryInterface
 * @package App\Repository
 */
interface AdRepositoryInterface
{
    /**
     * @return Ad|null
     */
    public function getMostRelevant(): ?Ad;
}
