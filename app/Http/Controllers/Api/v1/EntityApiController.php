<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Campaign;
use App\Models\Entity;
use App\Http\Resources\EntityResource as Resource;

class EntityApiController extends ApiController
{
    public function index(Campaign $campaign)
    {
        $this->authorize('access', $campaign);
        return Resource::collection($campaign->entities()
            ->apiFilter(request()->all())
            ->lastSync(request()->get('lastSync'))
            ->paginate()
            ->appends(request()->except(['page', 'lastSync'])));
    }

    /**
     * @param Campaign $campaign
     * @param Entity $entity
     * @return Resource
     */
    public function show(Campaign $campaign, Entity $entity)
    {
        $this->authorize('access', $campaign);
        $this->authorize('view', $entity->child);
        $resource = new Resource($entity);
        return $resource->withMisc();
    }
}
