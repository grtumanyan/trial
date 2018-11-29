@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Wallets</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Balance</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($wallets as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td> {{$item->type}} </td>
                            <td> {{$item->balance}} </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a class="navbar-brand" href="{{ route('walletCreate') }}">
                Add Wallet
            </a>
            <a class="navbar-brand" href="{{ route('recordCreate') }}">
                Add Record
            </a>
        </div>
    </div>
</div>
@endsection
