@extends('layouts.panel')

@section('template_title')
    {{ $stock->name ?? "{{ __('Show') Stock" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Stock</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('stocks.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Amount:</strong>
                            {{ $stock->amount }}
                        </div>
                        <div class="form-group">
                            <strong>Id Product:</strong>
                            {{ $stock->id_product }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
