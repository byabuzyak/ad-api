<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdCreateRequest;
use App\Http\Resources\AdResource;
use App\Services\AdCreateService;
use App\Services\AdGetService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * Class AdController
 * @package App\Http\Controllers\API\v1
 */
class AdController extends Controller
{
    /**
     * @param AdGetService $service
     * @return AdResource|Response
     */
    public function get(AdGetService $service)
    {
        $ad = $service->getMostRelevant();
        if (is_null($ad)) {
            return
                response()->noContent();
        }

        return
            new AdResource($ad);
    }

    /**
     * @param AdCreateRequest $request
     * @param AdCreateService $createService
     * @return JsonResponse
     */
    public function create(AdCreateRequest $request, AdCreateService $createService)
    {
        return response()
            ->json(
                new AdResource(
                    $createService->create(
                        $request->validated()
                    )
                ),
                Response::HTTP_CREATED
            );
    }
}
