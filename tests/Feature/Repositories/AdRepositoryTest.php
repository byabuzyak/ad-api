<?php

namespace Tests\Feature\Repositories;

use App\Ad;
use App\Repositories\Eloquent\AdRepository;
use Tests\TestCase;

class AdRepositoryTest extends TestCase
{
    public function testGetMostRelevant()
    {
        $ad1 = factory(Ad::class)->create([
            'price'         => 10,
            'amount'        => 10,
            'current_views' => 0
        ]);

        $ad2 = factory(Ad::class)->create([
            'price'         => 10.1,
            'amount'        => 7,
            'current_views' => 5
        ]);

        $adRepository = new AdRepository(new Ad);
        $ad = $adRepository->getMostRelevant();

        $this->assertNotEmpty($ad);
        $this->assertEquals($ad2->toArray(), $ad->toArray());
    }
}
