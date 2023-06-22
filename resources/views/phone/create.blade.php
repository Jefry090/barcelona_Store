@extends('layouts.panel')

@section('template_title')
    {{ __('Create') }} Phone
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Phone</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('phones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('phone.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
