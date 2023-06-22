@extends('layouts.panel')

@section('template_title')
    {{ $accesory->name ?? "{{ __('Show') Accesory" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Accesory</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('accesories.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Brand:</strong>
                            {{ $accesory->brand }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $accesory->description }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $accesory->status }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $accesory->price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
