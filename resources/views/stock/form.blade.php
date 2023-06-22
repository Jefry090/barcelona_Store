<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('amount') }}
            {{ Form::text('amount', $stock->amount, ['class' => 'form-control' . ($errors->has('amount') ? ' is-invalid' : ''), 'placeholder' => 'Amount']) }}
            {!! $errors->first('amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_product') }}
            {{ Form::text('id_product', $stock->id_product, ['class' => 'form-control' . ($errors->has('id_product') ? ' is-invalid' : ''), 'placeholder' => 'Id Product']) }}
            {!! $errors->first('id_product', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>