@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Records</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Wallet Id</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($record as $item)
                        <tr>
                            <td> {{$item->type}} </td>
                            <td> {{$item->amount}} </td>
                            <td>{{$item->walletId}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a class="navbar-brand" href="{{ route('recordCreate') }}">
                Add Record
            </a>
        </div>
    </div>
</div>
@endsection
