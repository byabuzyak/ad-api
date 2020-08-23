<?php

namespace Tests\Unit;

use App\Ad;
use App\Repositories\Eloquent\AdRepository;
use App\Services\AdCreateService;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class AdCreateServiceTest extends TestCase
{
    public function testCreate()
    {
        $mock = $this->createMock(AdRepository::class);
        $mock
            ->expects($this->exactly(1))
            ->method('create')
            ->willReturn(new Ad);

        $adService = new AdCreateService($mock);
        $adService->create([
            'banner' => UploadedFile::fake()->image('image.jpg')
        ]);
    }
}
