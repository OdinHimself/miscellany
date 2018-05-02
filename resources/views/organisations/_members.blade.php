<p>{{ trans('organisations.members.hint') }}</p>

<table id="organisation-characters" class="table table-hover">
    <tbody><tr>
        <th class="avatar"><br></th>
        <th>{{ trans('characters.fields.name') }}</th>
        @if ($campaign->enabled('locations'))
        <th>{{ trans('characters.fields.location') }}</th>
        @endif
        <th>{{ trans('organisations.members.fields.role') }}</th>
        <th>{{ trans('characters.fields.age') }}</th>
        <th>{{ trans('characters.fields.race') }}</th>
        <th>{{ trans('characters.fields.sex') }}</th>
        <th class="pull-right">
            @can('member', $model)
                <a href="{{ route('organisations.organisation_members.create', ['organisation' => $model->id]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i> {{ trans('organisations.members.actions.add') }}
                </a>
            @endcan
        </th>
    </tr>
    <?php $r = $model->members()->acl(auth()->user())->has('character')->with('character', 'character.location')->paginate();?>
    @foreach ($r->sortBy('character.name') as $relation)
        <tr>
            <td>
                <a class="entity-image" style="background-image: url('{{ $relation->character->getImageUrl(true) }}');" title="{{ $relation->character->name }}" href="{{ route('characters.show', $relation->character->id) }}"></a>
            </td>
            <td>
                <a href="{{ route('characters.show', $relation->character->id) }}" data-toggle="tooltip" title="{{ $relation->character->tooltip() }}">{{ $relation->character->name }}</a>
            </td>
            @if ($campaign->enabled('locations'))
            <td>
                @if ($relation->character->location)
                    <a href="{{ route('locations.show', $relation->character->location_id) }}" data-toggle="tooltip" title="{{ $relation->character->location->tooltip() }}">{{ $relation->character->location->name }}</a>
                @endif
            </td>
            @endif
            <td>{{ $relation->role }}</td>
            <td>{{ $relation->character->age }}</td>
            <td>{{ $relation->character->race }}</td>
            <td>{{ $relation->character->sex }}</td>
            <td class="text-right">
                @can('member', $model)
                    <a href="{{ route('organisations.organisation_members.edit', ['organisation' => $model, 'organisationMember' => $relation]) }}" class="btn btn-xs btn-primary">
                        <i class="fa fa-pencil"></i> {{ trans('crud.edit') }}
                    </a>
                    {!! Form::open(['method' => 'DELETE','route' => ['organisations.organisation_members.destroy', $model->id, $relation->id], 'style'=>'display:inline']) !!}
                    <button class="btn btn-xs btn-danger">
                        <i class="fa fa-trash" aria-hidden="true"></i> {{ trans('crud.remove') }}
                    </button>
                    {!! Form::close() !!}
                @endcan
            </td>
        </tr>
    @endforeach
    </tbody></table>

{{ $r->fragment('tab_member')->links() }}
