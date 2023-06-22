@extends('layouts.panel')

@section('template_title')
    Phone
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Phone') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('phones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Brand</th>
										<th>Model</th>
										<th>Status</th>
										<th>Price</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($phones as $phone)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $phone->brand }}</td>
											<td>{{ $phone->model }}</td>
											<td>{{ $phone->status }}</td>
											<td>{{ $phone->price }}</td>

                                            <td>
                                                <form action="{{ route('phones.destroy',$phone->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('phones.show',$phone->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('phones.edit',$phone->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $phones->links() !!}
            </div>
        </div>
    </div>
@endsection
