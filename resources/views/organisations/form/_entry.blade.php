<div class="row">
    <div class="col-md-6">
        @include('cruds.fields.name', ['trans' => 'organisations'])
        @include('cruds.fields.type', ['base' => \App\Models\Organisation::class, 'trans' => 'organisations'])
        <div class="form-group">
            {!! Form::foreignSelect(
                'organisation_id',
                [
                    'preset' => (isset($model) && $model->organisation ? $model->organisation : FormCopy::field('organisation')->select(true, \App\Models\Organisation::class)),
                    'class' => App\Models\Organisation::class,
                    'enableNew' => true,
                    'labelKey' => 'organisations.fields.organisation',
                    'from' => isset($model) ? $model : null,
                ]
            ) !!}
        </div>

        @include('cruds.fields.location')

        @if ($campaign->enabled('characters'))
            <input type="hidden" name="sync_org_members" value="1">
            <div class="form-group">
                {!! Form::members(
                    'id',
                    [
                        'model' => isset($model) ? $model : FormCopy::model(),
                        'source' => $source
                    ]
                ) !!}
            </div>
        @endif

        @include('cruds.fields.tags')

        @include('cruds.fields.private')
    </div>
    <div class="col-md-6">
        @include('cruds.fields.entry2')
        @include('cruds.fields.image')
    </div>
</div>

@section('scripts')
    @parent
    <script src="{{ mix('js/organisation.js') }}" defer></script>
@endsection
