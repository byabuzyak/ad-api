<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

/**
 * Class AdResource
 * @property string $text
 * @property double $price
 * @property int $amount
 * @property int $current_views
 * @property string banner
 * @package App\Http\Resources
 */
class AdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'text'   => $this->text,
            'banner' => asset(Storage::url($this->banner))
        ];
    }
}
