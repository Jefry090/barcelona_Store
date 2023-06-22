@extends('layouts.panel')

@section('template_title')
    {{ $sale->name ?? "{{ __('Show') Sale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $sale->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $sale->price }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $sale->date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Product:</strong>
                            {{ $sale->id_product }}
                        </div>
                        <div class="form-group">
                            <strong>Id Supplier:</strong>
                            {{ $sale->id_supplier }}
                        </div>
                        <div class="form-group">
                            <strong>Id Record:</strong>
                            {{ $sale->id_record }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
