<?php

namespace Tests\Feature\Services;

use App\Ad;
use App\Repositories\Eloquent\AdRepository;
use App\Services\AdGetService;
use Tests\TestCase;

class AdServiceTest extends TestCase
{
    public function testGetAd()
    {
        $ad = factory(Ad::class)->create([
            'price'         => 10,
            'amount'        => 10,
            'current_views' => 1
        ]);

        $adService = new AdGetService(new AdRepository(new Ad));
        $adFromService = $adService->getMostRelevant();

        $this->assertEquals($ad->id, $adFromService->id);
        $this->assertEquals(($ad->current_views + 1), $adFromService->current_views);
    }
}
