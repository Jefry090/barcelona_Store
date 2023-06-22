@extends('layouts.panel')

@section('template_title')
    {{ $phone->name ?? "{{ __('Show') Phone" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Phone</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('phones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Brand:</strong>
                            {{ $phone->brand }}
                        </div>
                        <div class="form-group">
                            <strong>Model:</strong>
                            {{ $phone->model }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $phone->status }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $phone->price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
