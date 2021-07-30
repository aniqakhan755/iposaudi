<?php

namespace App\Http\Controllers;

use App\Models\ChooseUsConfiguration;
use App\Models\FooterConfiguration;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Response;

class AboutController extends Controller
{
    public function chooseReadMore()
    {
        $choose_configuration = (new ChooseUsConfiguration)->where('id', 1)->first();
        $footer_configuration = (new FooterConfiguration)->where('id',1)->first();
        $current_stocks = (new Stock)->where('date', Carbon::yesterday()->toDateString())->get();
        return view('choose-more', compact(['choose_configuration','footer_configuration','current_stocks']));
    }
    public function downloadProfile()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/downloads/Faisal Siddique (IPO Saudi).pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, 'Faisal Siddique (IPO Saudi).pdf', $headers);
    }
}
