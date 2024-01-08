<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $apiEndpoint = 'http://api.exchangeratesapi.io/v1/latest?access_key=a50609161b0cdbef3d35664ef8e814b2';
        $client = new Client();

        try {
            $response = $client->get($apiEndpoint);
            $data = $response->getBody()->getContents();
            $parsedData = json_decode($data, true);
            // dd($parsedData);
            $parsedData = $parsedData['rates'];
            // dd($parsedData);

            return view('front.index')->with(compact('parsedData'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        // return view('front.index')->with(compact('sliderBanners', 'fix_1Banners', 'fix_2Banners', 'fix_3Banners', 'newProducts', 'bestSellers', 'discountedProducts', 'featuredProducts'));
    }

    public function convert(Request $request)
    {
        $amount = $request->input('amount');
        $fromCurrency = $request->input('from_currency');
        $toCurrency = $request->input('to_currency');


        $total = $amount * $toCurrency / $fromCurrency;


        $bankAccountFee = $total * .0013;
        $ourFee = $total * .013;
        $totalFee = $bankAccountFee + $ourFee;

        $total = $total - $totalFee;

        return redirect('/')->with('total_amount', $total)->with('amount', $amount)->with('bankAccountFee', $bankAccountFee)->with('ourFee', $ourFee)->with('totalFee', $totalFee);
    }
}
