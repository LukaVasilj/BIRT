@extends('customers.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <h1>CUSTOMERS</h1>
                    <div class="card-body">
                        <a href="{{ url('/customers/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <a href="{{ url('/employees') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Employees
                        </a>
                        <a href="{{ url('/offices') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Offices
                        </a>
                        <br/>
                        <br/>
                        <div class="table-scroll">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>buttons</th>
                                        <th>customerNumber</th>
                                        <th>customerName</th>
                                        <th>contactLastName</th>
                                        <th>contactFirstName</th>
                                        <th>phone</th>
                                        <th>addressLine1</th>
                                        <th>addressLine2</th>
                                        <th>city</th>
                                        <th>state</th>
                                        <th>postalCode</th>
                                        <th>country</th>
                                        <th>salesRepEmployeeNumber</th>
                                        <th>creditLimit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($customers as $item)
                                    <tr>
                                        <td class="red-text">{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ url('/customers/' . $item->customerNumber) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/customers/' . $item->customerNumber . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/customers/' . $item->customerNumber) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                        <td class="red-text">{{ $item->customerNumber }}</td>
                                        <td>{{ $item->customerName }}</td>
                                        <td>{{ $item->contactLastName }}</td>
                                        <td>{{ $item->contactFirstName }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->addressLine1 }}</td>
                                        <td>{{ $item->addressLine2 }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->state }}</td>
                                        <td>{{ $item->postalCode }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->salesRepEmployeeNumber }}</td>
                                        <td>{{ $item->creditLimit }}</td>



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
