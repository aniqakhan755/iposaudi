<?php

namespace App\Http\Controllers;

use App\Models\AboutConfiguration;
use App\Models\ChooseUsConfiguration;
use App\Models\FooterConfiguration;
use App\Models\Heading;
use App\Models\Message;
use App\Models\News;
use App\Models\ServiceConfiguration;
use App\Models\SliderConfiguration;
use App\Models\Stock;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index()
    {

        $slider_configuration = (new SliderConfiguration)->where('id', 1)->first();
        $about_configuration = (new AboutConfiguration)->where('id', 1)->first();
        $service_configurations = (new ServiceConfiguration)->all();
        $footer_configuration = (new FooterConfiguration)->where('id', 1)->first();
        $choose_configuration = (new ChooseUsConfiguration)->where('id', 1)->first();
        $heading = (new Heading)->where('id', 1)->first();
        $symbols = [
            '2222.XSAU' => 'SAUDI ARABIAN OIL CO.',
            '2010.XSAU' => 'SAUDI BASIC INDUSTRIES CORP',
            '7010.XSAU' => 'SAUDI TELECOM CO.',
            '1120.XSAU' => 'AL RAJHI BANK',
            '1180.XSAU' => 'NATIONAL COMMERCIAL BANK',
        ];

        $current_stock = (new Stock)->where('date', Carbon::yesterday()->toDateString())->get();
        $current_news = (new News)->where('created_at','>=', Carbon::now()->subMinutes(30)->format('Y-m-d H:i:s'))->orderBy('id','desc')->take(10)->get();

        if ($current_stock->count() == 0) {
            $queryString = http_build_query([
                'access_key' => 'ae50a4e573951d7ed4abcfa32d9823c7',
                'exchange' => 'XSAU',
                'symbols' => '2222.XSAU,2010.XSAU,7010.XSAU,1120.XSAU,1180.XSAU'
            ]);

            $ch = curl_init(sprintf('%s?%s', 'http://api.marketstack.com/v1/eod/latest', $queryString));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $json = curl_exec($ch);
            curl_close($ch);

            $apiResult = json_decode($json, true);


            foreach ($apiResult['data'] as $index => $value) {
                $difference = round($apiResult['data'][$index]['close'] - $apiResult['data'][$index]['open'], 2);
                Stock::create([
                    'symbol' => $apiResult['data'][$index]['symbol'],
                    'name' => $symbols[$apiResult['data'][$index]['symbol']],
                    'price' => $apiResult['data'][$index]['close'],
                    'open' => $apiResult['data'][$index]['open'],
                    'close' => $apiResult['data'][$index]['close'],
                    'high' => $apiResult['data'][$index]['high'],
                    'low' => $apiResult['data'][$index]['low'],
                    'difference' => $difference,
                    'percentage' => round((100 * ($apiResult['data'][$index]['close'] - $apiResult['data'][$index]['open'])) / $apiResult['data'][$index]['open'], 2),
                    'date' => Carbon::yesterday()->toDateString()
                ]);
            }

        }
        if ($current_news->count() == 0) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://gnews.io/api/v4/top-headlines?token=0fe5a9586fbe2b21da89b1c59ec314a6&topic=business&lang=en&country=sa');
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $data = curl_exec($ch);
            curl_close($ch);
            $apiResult = json_decode($data, true);


            foreach ($apiResult["articles"] as $article) {

                News::create([
                    'title' => $article['title'],
                    'description' => $article['description'],
                    'content' => $article['content'],
                    'url' => $article['url'],
                    'image' => $article['image'],
                    'source_name' => $article['source']['name'],
                    'source_url' => $article['source']['url'],
                    'pulished_date' => date('Y-m-d', strtotime($article['publishedAt']))

                ]);
            }


        }
        $current_stocks = (new Stock)->where('date', Carbon::yesterday()->toDateString())->get();
        $current_news = (new News)::orderBy('id','DESC')->take(10)->get();

        return view('welcome', compact(['slider_configuration', 'about_configuration', 'service_configurations', 'footer_configuration', 'choose_configuration', 'heading', 'current_stocks','current_news']));


    }

    public function postContact(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Error storing record, try again.');
        }


        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,


        ]);
        return back()->withSuccess('Message Successfully Sent!');
    }

    public function getMessages()
    {
        $messages = Message::all();
        return view('manage-messages', compact('messages'));


    }
}
