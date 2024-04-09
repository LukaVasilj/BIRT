@extends('products.layout')
@section('content')

<div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <h1>Products</h1>
                    <div class="card-body">
                        <a href="{{ url('/employees/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <a href="{{ url('/customers') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Customers
                        </a>
                        <a href="{{ url('/offices') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Offices
                        </a>
                        <br/>
                        <br/>
                        <div class="table-scroll">
                            <table class="table">
                                <thead>
                                    <tr class="fixed-header">
                                        <th>#</th>
                                        <th>buttons</th>
                                        <th>employeeNumber</th>
                                        <th>lastName</th>
                                        <th>firstName</th>
                                        <th>extension</th>
                                        <th>email</th>
                                        <th>officeCode</th>
                                        <th>reportsTo</th>
                                        <th>jobTitle</th>



                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($orderdetails as $item)
                                    <tr>
                                        <td class="red-text">{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ url('/employees/' . $item->employeeNumber) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/employees/' . $item->employeeNumber . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/employees/' . $item->employeeNumber) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>

                                        <td>{{ $item->orderNumber }}</td>
                                        <td>{{ $item->productCode }}</td>
                                        <td>{{ $item->quantityOrdered }}</td>
                                        <td>{{ $item->priceEach }}</td>
                                        <td>{{ $item->orderLineNumber }}</td>





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
