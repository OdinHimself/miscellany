<div class="form-group required">
    <label for="config-entity">
        {{ __('crud.fields.entity') }}
    </label>
    {!! Form::select('config[entity]', $entities, (!empty($model) ? $model->conf('entity') : null), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>{{ __('dashboard.widgets.fields.name') }}</label>
    {!! Form::text('config[text]', null, ['class' => 'form-control', 'placeholder' => __('dashboard.widgets.unmentioned.title')]) !!}
</div>

<div class="form-group">
    {!! Form::tags(
            'tag_id',
            [
                'model' => isset($model) ? $model : null,
                'enableNew' => false
            ]
        ) !!}
    <input type="hidden" name="save_tags" value="1" />
</div>
