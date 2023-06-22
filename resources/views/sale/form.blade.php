<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('quantity') }}
            {{ Form::text('quantity', $sale->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Quantity']) }}
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $sale->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $sale->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_product') }}
            {{ Form::text('id_product', $sale->id_product, ['class' => 'form-control' . ($errors->has('id_product') ? ' is-invalid' : ''), 'placeholder' => 'Id Product']) }}
            {!! $errors->first('id_product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_supplier') }}
            {{ Form::text('id_supplier', $sale->id_supplier, ['class' => 'form-control' . ($errors->has('id_supplier') ? ' is-invalid' : ''), 'placeholder' => 'Id Supplier']) }}
            {!! $errors->first('id_supplier', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_record') }}
            {{ Form::text('id_record', $sale->id_record, ['class' => 'form-control' . ($errors->has('id_record') ? ' is-invalid' : ''), 'placeholder' => 'Id Record']) }}
            {!! $errors->first('id_record', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>