<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait Apitrait
{

   public function get_rate($coin, $currency)
{
    $response = Http::get('https://api.coingecko.com/api/v3/simple/price', [
        'ids' => strtolower($coin),
        'vs_currencies' => strtolower($currency)
    ]);

    if ($response->successful() && isset($response[$coin][$currency])) {
        return $response[$coin][$currency];
    }

    return null;
}

};