@extends('offices.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <h1>OFFICES</h1>
                    <div class="card-body">
                        <a href="{{ url('/offices/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <a href="{{ url('/customers') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Customers
                        </a>
                        <a href="{{ url('/employees') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Employees
                        </a>
                        <br/>
                        <br/>
                        <div class="table-scroll">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>buttons</th>
                                        <th>officeCode</th>
                                        <th>city</th>
                                        <th>phone</th>
                                        <th>addressLine1</th>
                                        <th>addressLine2</th>
                                        <th>state</th>
                                        <th>country</th>
                                        <th>postalCode</th>
                                        <th>territory</th>



                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($offices as $item)
                                    <tr>
                                        <td class="red-text">{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ url('/offices/' . $item->officeCode) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/offices/' . $item->officeCode . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/offices/' . $item->officeCode) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>

                                        <td class="red-text">{{ $item->officeCode }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->addressLine1 }}</td>
                                        <td>{{ $item->addressLine2 }}</td>
                                        <td>{{ $item->state }}</td>
                                        <td>{{ $item->country}}</td>
                                        <td>{{ $item->postalCode }}</td>
                                        <td>{{ $item->territory }}</td>




                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
