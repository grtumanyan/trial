@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Record</div>

                <div class="card-body">

                    {!! Form::open(['url' => 'record']) !!}

                    <div class="form-group">
                        {!! Form::label('type', 'Type:') !!}
                        {!! Form::select('type', array('Income' => 'Income', 'Expense' => 'Expense'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('wallet', 'Wallet:') !!}
                        {!! Form::select('wallet', $wallets, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('amount', 'Amount:') !!}
                        {!! Form::number('amount',  'Amount', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Add', ['class' => 'btn btn-primary form-control']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
