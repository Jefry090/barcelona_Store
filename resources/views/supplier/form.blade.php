<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('Name', $supplier->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Age') }}
            {{ Form::text('Age', $supplier->Age, ['class' => 'form-control' . ($errors->has('Age') ? ' is-invalid' : ''), 'placeholder' => 'Age']) }}
            {!! $errors->first('Age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Gender') }}
            {{ Form::text('Gender', $supplier->Gender, ['class' => 'form-control' . ($errors->has('Gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('Gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_product') }}
            {{ Form::text('id_product', $supplier->id_product, ['class' => 'form-control' . ($errors->has('id_product') ? ' is-invalid' : ''), 'placeholder' => 'Id Product']) }}
            {!! $errors->first('id_product', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>