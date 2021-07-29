<?php

namespace App\Http\Controllers;

use App\Models\ChooseUsConfiguration;
use App\Models\FooterConfiguration;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
    public function chooseReadMore()
    {
        $choose_configuration = (new ChooseUsConfiguration)->where('id', 1)->first();
        $footer_configuration = (new FooterConfiguration)->where('id',1)->first();
        $current_stocks = (new Stock)->where('date', Carbon::yesterday()->toDateString())->get();
        return view('choose-more', compact(['choose_configuration','footer_configuration','current_stocks']));
    }
}
