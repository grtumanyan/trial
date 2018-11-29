<?php

namespace App\Http\Controllers;

use Request;
use Route;
use App\Wallet;
use App\Record;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function wallet()
    {
        $wallets = Wallet::all();
        return view('wallet', ['wallets' => $wallets]);
    }

    /**
     * Show the wallets creation page.
     *
     * @return \Illuminate\Http\Response
     */
    public function walletCreate()
    {
        return view('walletCreate');
    }

    /**
     * Show the wallets creation page.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeWallet()
    {
        $input = Request::all();

        Wallet::create([
            'name' => $input['name'],
            'type' => $input['type'],
            'balance' => 0,
        ]);

        return view('thanks');
    }

    /**
     * Show the wallets creation page.
     *
     * @return \Illuminate\Http\Response
     */
    public function recordCreate()
    {
        $wallets = Wallet::pluck('name', 'id');
        return view('recordCreate', ['wallets' => $wallets]);
    }

    /**
     * Show the wallets creation page.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeRecord()
    {
        $input = Request::all();

        $current = Wallet::find($input['wallet'])->balance;
        if($input['type'] == 'Income'){$change = $current + $input['amount'];}
        elseif($input['type'] == 'Expense'){$change = $current - $input['amount'];}

        Wallet::where('id', $input['wallet'])->update(array('balance' => $change));

        Record::create([
            'wallet_id' => $input['wallet'],
            'type' => $input['type'],
            'amount' => $input['amount'],
        ]);

        return view('thanks');
    }

    /**
     * Show thank you page.
     *
     * @return \Illuminate\Http\Response
     */
    public function thanks()
    {
        return view('thanks');
    }
}

