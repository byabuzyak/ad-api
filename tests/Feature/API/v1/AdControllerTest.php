<?php

namespace Tests\Feature\API\v1;

use App\Ad;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class AdControllerTest extends TestCase
{
    public function testGet()
    {
        factory(Ad::class, 100)->create();
        $response = $this->get('/ad/get');

        $response->assertStatus(200);
        $response->assertJsonStructure(
            [
                'data' => [
                    'text',
                    'banner'
                ]
            ]
        );
    }

    public function testCreate()
    {
        $ad       = factory(Ad::class)->make();
        $response = $this->post('/ad/create', [
            'text'   => $ad->text,
            'amount' => $ad->amount,
            'price'  => $ad->price,
            'banner' => UploadedFile::fake()->image('image.jpg')
        ]);

        $response
            ->assertStatus(201)
            ->assertJsonStructure(
                [
                    'text',
                    'banner'
                ]
            );
    }
}
