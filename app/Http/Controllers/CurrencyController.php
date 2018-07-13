<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurrencyRequest;
use App\Currency;

class CurrencyController extends Controller
{
    public function index()
    {
        $data = [
            'allCurrencies' =>  Currency::all(),
            'title'         =>  'Currency market'
        ];

        return view('currencies', $data);
    }
    public function show(int $id)
    {
        $data = [
            'currency' => Currency::find($id),
        ];

        return view('currencyItem', $data);
    }

    public function create()
    {
        $data = [
            'currency' => Currency::find($id),
        ];

        return view('currencyItem', $data);

    }
    public function edit(Currency $currency)
    {
        $data = [
            'currency'  =>  $currency,
            'title'     =>  $currency->title
        ];

        return view('currencyEdit', $data);
    }

    public function update(CurrencyRequest $request, Currency $currency)
    {
    }


    public function destroy(Currency $currency)
    {
        $currency->delete();
        return redirect('currencies.index');
    }
}
