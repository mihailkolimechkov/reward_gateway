<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RewardGateway extends Controller
{
    public function getListOfPersons()
    {

        $response = Http::withBasicAuth('hard', 'hard')->post('http://hiring.rewardgateway.net/list');

//        $result = json_decode($response->collect(), true);

        $result = $response->json();
        return view('reward-list', compact('result'));
    }
}
