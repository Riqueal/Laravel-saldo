<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MoneyValidationFormRequest;
use App\Models\Balance;

class BalanceController extends Controller
{
    public function index()
    {
        //debug
        // dd( auth()->user()); retorna todos os dados
        //dd( auth()->user()->name); retorna somente o nome

        $balance = auth()->user()->balance;

        $amount = $balance ? $balance->amount : 0;

        return view('admin.balance.index', compact('amount'));
    }

    public function deposit()
    {

        return view('admin.balance.deposit');

    }

    public function depositStore(MoneyValidationFormRequest $request)
    {
        
        $balance = auth()->user()->balance()->firstOrCreate([]);

        $response = $balance->deposit($request->value);

        if($response['success'])
            return redirect()
                ->route('admin.balance')
                ->with('success', $response['message']);

        return redirect()
            ->back()
            ->with('error', $response['message']);
        
    }
}
