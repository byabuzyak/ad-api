<?php

namespace App\Services;

use App\Ad;
use App\Repositories\Eloquent\AdRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AdCreateService
 * @package App\Services
 */
class AdCreateService
{
    /**
     * @var AdRepository
     */
    protected $adRepository;

    /**
     * AdCreateService constructor.
     * @param AdRepository $adRepository
     */
    public function __construct(AdRepository $adRepository)
    {
        $this->adRepository = $adRepository;
    }

    /**
     * @param array $attributes
     * @return Ad|Model
     */
    public function create(array $attributes): Ad
    {
        $attributes = array_merge(
            $attributes,
            ['banner' => $attributes['banner']->store('public/banners')]
        );

        return
            $this->adRepository->create($attributes);
    }
}
