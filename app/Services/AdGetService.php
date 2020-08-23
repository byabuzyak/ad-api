<?php

namespace App\Services;

use App\Ad;
use App\Repositories\Eloquent\AdRepository;

/**
 * Class AdGetService
 * @package App\Services
 */
class AdGetService
{
    /**
     * @var AdRepository
     */
    protected $adRepository;

    /**
     * AdService constructor.
     * @param AdRepository $adRepository
     */
    public function __construct(AdRepository $adRepository)
    {
        $this->adRepository = $adRepository;
    }

    /**
     * @return Ad|null
     */
    public function getMostRelevant(): ?Ad
    {
        $ad = $this->adRepository->getMostRelevant();
        if (!$ad) {
            return null;
        }

        $ad->current_views += 1;
        $ad->save();

        return $ad;
    }
}
