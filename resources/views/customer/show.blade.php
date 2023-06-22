@extends('layouts.panel')

@section('template_title')
    {{ $customer->name ?? "{{ __('Show') Customer" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Customer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('customers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $customer->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $customer->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $customer->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            {{ $customer->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $customer->address }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sales:</strong>
                            {{ $customer->id_sales }}
                        </div>
                        <div class="form-group">
                            <strong>Id Bill:</strong>
                            {{ $customer->id_bill }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
