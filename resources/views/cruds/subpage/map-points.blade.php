<?php /**
 * @var \App\Models\MiscModel $model
 * @var \App\Models\MapMarker $marker
 */ ?>
@extends('layouts.app', [
    'title' => trans('entities/map-points.title', ['name' => $model->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => route($name . '.index'), 'label' => __($name . '.index.title')],
        ['url' => route($name . '.show', $model), 'label' => $model->name],
        trans('crud.tabs.map-points')
    ],
    'mainTitle' => false,
])

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-3">
            @include($name . '._menu', ['active' => 'map-points'])
        </div>
        <div class="col-md-9">
            <div class="box box-solid">
                <div class="box-body">
                    <h2 class="page-header with-border">
                        {{ trans('entities/map-points.title', ['name' => $model->name]) }}
                    </h2>

                    <p class="help-block">{{ __('entities/map-points.helper') }}</p>

                    <table id="entity-map-points" class="table table-hover {{ $data->count() === 0 ? 'export-hidden' : '' }}">
                        <tbody><tr>
                            <th>{{ trans('locations.fields.name') }}</th>
                            <th>{{ trans('locations.fields.map') }}</th>
                        </tr>
                        @foreach ($markers as $marker)
                            <tr>
                                <td>
                                    {!! $marker->map->tooltipedLink() !!}
                                </td>
                                <td>
                                    <a href="{{ route('maps.explore', [$marker->map_id, 'lat' => $marker->latitude, 'lng' => $marker->longitude]) }}" target="_blank">
                                        <i class="fa fa-map"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @foreach ($data as $location)
                            <tr>
                                <td>
                                    {!! $location->location->tooltipedLink() !!}
                                </td>
                                <td>
                                    @if (!empty($location->location->map) && (!$location->location->is_map_private || (auth()->check() && auth()->user()->can('map', $location->location))))
                                        <a href="{{ route('locations.map', $location->location_id) }}"><i class="fa fa-map"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $markers->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
