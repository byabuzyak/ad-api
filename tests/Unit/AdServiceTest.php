<?php

namespace Tests\Unit;

use App\Repositories\Eloquent\AdRepository;
use App\Services\AdGetService;
use PHPUnit\Framework\TestCase;

class AdServiceTest extends TestCase
{
    /**
     * @return void
     */
    public function testGet()
    {
        $mock = $this->createMock(AdRepository::class);
        $mock
            ->expects($this->exactly(1))
            ->method('getMostRelevant');

        $adService = new AdGetService($mock);
        $adService->getMostRelevant();
    }
}
