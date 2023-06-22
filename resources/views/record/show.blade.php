@extends('layouts.panel')

@section('template_title')
    {{ $record->name ?? "{{ __('Show') Record" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Record</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('records.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Depature Date:</strong>
                            {{ $record->depature_date }}
                        </div>
                        <div class="form-group">
                            <strong>Entry Date:</strong>
                            {{ $record->entry_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
