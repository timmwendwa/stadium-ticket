@extends('layouts.app')
@section('content')


<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
        <th scope="col">Customer</th>
        <th scope="col">Email</th>
        <th scope="col">Tickets</th>
        <th scope="col">Amount</th>
        <th></th>
        
        
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $r)

                    <tr>
                    <td>{{ $r->id }}</td>
                    <th scope="row">{{$r->user->fname}} {{$r->user->lname}}</th>
                    <td>{{ $r->user->email }}</td>
                    <td>{{ $r->units}}</td>
                    <td>{{ $r->amount }}</td>
                    <td></td>
                    
                    </tr>
        @endforeach


                                </tbody>
                            </table>


@endsection