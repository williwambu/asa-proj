
@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col s12 l1 m12">
            <table>
                <thead>
                <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Phone</th>
                    <th data-field="price">Email</th>
                </tr>
                </thead>

                <tbody>
                @foreach($subscribers as $subscr)
                    <tr>
                        <td>{{$subscr ->name}}</td>
                        <td>{{$subscr -> phone}}</td>
                        <td>{{$subscr -> email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop