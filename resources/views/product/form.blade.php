<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $product->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_phone') }}
            {{ Form::text('id_phone', $product->id_phone, ['class' => 'form-control' . ($errors->has('id_phone') ? ' is-invalid' : ''), 'placeholder' => 'Id Phone']) }}
            {!! $errors->first('id_phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_accesory') }}
            {{ Form::text('id_accesory', $product->id_accesory, ['class' => 'form-control' . ($errors->has('id_accesory') ? ' is-invalid' : ''), 'placeholder' => 'Id Accesory']) }}
            {!! $errors->first('id_accesory', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>