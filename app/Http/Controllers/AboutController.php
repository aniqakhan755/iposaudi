<?php

namespace App\Http\Controllers;

use App\Models\ChooseUsConfiguration;
use App\Models\FooterConfiguration;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function chooseReadMore()
    {
        $choose_configuration = (new ChooseUsConfiguration)->where('id', 1)->first();
        $footer_configuration = (new FooterConfiguration)->where('id',1)->first();
        return view('choose-more', compact(['choose_configuration','footer_configuration']));
    }
}
