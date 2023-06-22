<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('depature_date') }}
            {{ Form::text('depature_date', $record->depature_date, ['class' => 'form-control' . ($errors->has('depature_date') ? ' is-invalid' : ''), 'placeholder' => 'Depature Date']) }}
            {!! $errors->first('depature_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entry_date') }}
            {{ Form::text('entry_date', $record->entry_date, ['class' => 'form-control' . ($errors->has('entry_date') ? ' is-invalid' : ''), 'placeholder' => 'Entry Date']) }}
            {!! $errors->first('entry_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>