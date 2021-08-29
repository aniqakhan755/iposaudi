<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
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
use Illuminate\Support\Facades\Mail;
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
            '5110.XSAU' => 'SAUDI ELECTRICITY CO.',
            '1010.XSAU' => 'RIYAD BANK',
            '1060.XSAU' => 'THE SAUDI BRITISH BANK',
            '1090.XSAU' => 'SAMBA FINANCIAL GROUP',
            '1211.XSAU' => 'SAUDI ARABIAN MINING CO.',
            '2280.XSAU' => 'ALMARAI CO.',
            '1050.XSAU' => 'BANQUE SAUDI FRANSI',
            '1080.XSAU' => 'ARAB NATIONAL BANK',
            '1150.XSAU' => 'ALINMA BANK',
            '2020.XSAU' => 'SAUDI ARABIAN FERTILIZER CO.',
            '2290.XSAU' => 'YANBU NATIONAL PETROCHEMICAL CO.',
            '4250.XSAU' => 'JABAL OMAR DEVELOPMENT CO.',
            '4280.XSAU' => 'KINGDOM HOLDING CO.',
            '4190.XSAU' => 'JARIR MARKETING CO.',
            '1140.XSAU' => 'BANK ALBILAD',
            '2050.XSAU' => 'SAVOLA GROUP',
            '7020.XSAU' => 'ETIHAD ETISALAT CO.',
            '2380.XSAU' => 'RABIGH REFINING AND PETROCHEMICAL CO.',
            '4321.XSAU' => 'ARABIAN CENTRES CO.',
            '2350.XSAU' => 'SAUDI KAYAN PETROCHEMICAL CO.',
            '4030.XSAU' => 'NATIONAL SHIPPING COMPANY OF SAUDI ARABIA',
            '8210.XSAU' => 'BUPA ARABIA FOR COOPERATIVE INSURANCE CO.',
            '2310.XSAU' => 'SAHARA INTERNATIONAL PETROCHEMICAL CO.',
            '1020.XSAU' => 'BANK ALJAZIRA',
            '4100.XSAU' => 'ALINMA BANK',
            '2002.XSAU' => 'SAUDI ARABIAN FERTILIZER CO.',
            '1030.XSAU' => 'SAUDI INVESTMENT BANK',
            '4300.XSAU' => 'DAR ALARKAN REAL ESTATE DEVELOPMENT CO.',
            '2330.XSAU' => 'ADVANCED PETROCHEMICAL CO.',
            '2250.XSAU' => 'SAUDI INDUSTRIAL INVESTMENT GROUP',
            '3030.XSAU' => 'SAUDI CEMENT CO.',
            '4002.XSAU' => 'MOUWASAT MEDICAL SERVICES CO.',
            '8010.XSAU' => 'THE COMPANY FOR COOPETATIVE INSURANCE',
            '3050.XSAU' => 'SOUTHERN PROVINCE CEMENT CO.',
            '2060.XSAU' => 'NATIONAL INDUSTRIALIZATION CO.',
            '4220.XSAU' => 'EMAAR THE ECONOMIC CITY',
            '6004.XSAU' => 'SAUDI AIRLINES CATERING CO.',
            '4001.XSAU' => 'ABDULLAH AL OTHAIM MARKETS CO.',
            '3040.XSAU' => 'THE QASSIM CEMENT CO.',
            '4031.XSAU' => 'SAUDI GROUND SERVICES CO.',
            '4240.XSAU' => 'FAWAZ ABDULAZIZ ALHOKAIR CO.',
            '7030.XSAU' => 'MOBILE TELECOMMUNICATIONS COMPANY SAUDI ARABIA',
            '3060.XSAU' => 'YANBOU CEMENT CO.',
            '1810.XSAU' => 'SEERA GROUP HOLDING',
            '4210.XSAU' => 'SAUDI RESEARCH AND MARKETING GROUP',
            '3020.XSAU' => 'YAMAMA CEMENT CO.',
            '4090.XSAU' => 'TAIBA INVESTMENTS CO.',
            '2270.XSAU' => 'SAUDIA DAIRY AND FOODSTUFF CO.',
            '1830.XSAU' => 'LEEJAM SPORTS CO',
            '4004.XSAU' => 'DALLAH HEALTHCARE CO.',
            '4003.XSAU' => 'UNITED ELECTRONICS CO.',
            '4200.XSAU' => 'ALDREES PETROLEUM AND TRANSPORT SERVICES CO.',
            '4020.XSAU' => 'SAUDI REAL ESTATE CO.',
            '3010.XSAU' => 'ARABIAN CEMENT CO.',
            '2070.XSAU' => 'SAUDI PHARMACEUTICAL INDUSTRIES AND MEDICAL APPLIA',
            '3003.XSAU' => 'CITY CEMENT CO.',
            '4310.XSAU' => 'KNOWLEDGE ECONOMIC CITY',
            '6002.XSAU' => 'HERFY FOOD SERVICES CO.',
            '3080.XSAU' => 'EASTERN PROVINCE CEMENT CO.',
            '1831.XSAU' => 'MAHARAH HUMAN RESOURCES CO.',
            '4150.XSAU' => 'ARRIYADH DEVELOPMENT CO.',
            '4009.XSAU' => 'MIDDLE EAST HEALTH CARE CO.',
            '4007.XSAU' => 'AL HAMMADI COMPANY FOR DEVELOPMENT AND INVESTMENT',
            '4010.XSAU' => 'DUR HOSPITALITY CO.',
            '8230.XSAU' => 'AL-RAJHI COMPANY FOR COOPERATIVE INSURANCE',
            '4260.XSAU' => 'UNITED INTERNATIONAL TRANSPORTATION CO.',
            '2080.XSAU' => 'NATIONAL GAS AND INDUSTRIALIZATION CO.',
            '2040.XSAU' => 'SAUDI CERAMIC CO.',
            '6010.XSAU' => 'NATIONAL AGRICULTURE DEVELOPMENT CO.',
            '3004.XSAU' => 'NORTHERN REGION CEMENT CO.',
            '2170.XSAU' => 'ALUJAIN HOLDING CORP.',
            '4040.XSAU' => 'SAUDI PUBLIC TRANSPORT CO.',
            '4005.XSAU' => 'NATIONAL MEDICAL CARE CO.',
            '3002.XSAU' => 'NAJRAN CEMENT CO.',
            '2230.XSAU' => 'SAUDI CHEMICAL CO.',
            '2190.XSAU' => 'SAUDI INDUSTRIAL SERVICES CO.',
            '4342.XSAU' => 'JADWA REIT SAUDI FUND',
            '4050.XSAU' => 'SAUDI AUTOMOTIVE SERVICES CO.',
            '4008.XSAU' => 'SAUDI COMPANY FOR HARDWARE',
            '8030.XSAU' => 'THE MEDITERRANEAN AND GULF INSURANCE AND REINSURAN',
            '4347.XSAU' => 'BONYAN REIT FUND',
            '8250.XSAU' => 'AXA COOPERATIVE INSURANCE CO.',
            '4292.XSAU' => 'ATAA EDUCATIONAL CO.',
            '4340.XSAU' => 'AL RAJHI REIT FUND',
            '4330.XSAU' => 'RIYAD REIT FUND',
            '3090.XSAU' => 'TABOUK CEMENT CO.',
            '4080.XSAU' => 'ASEER TRADING, TOURISM AND MANUFACTURING CO.',
            '9510.XSAU' => 'NATIONAL BUILDING AND MARKETING CO.',
            '4291.XSAU' => 'NATIONAL COMPANY FOR LEARNING AND EDUCATION',
            '3091.XSAU' => 'AL JOUF CEMENT CO.',
            '4338.XSAU' => 'ALAHLI REIT FUND 1',
            '3005.XSAU' => 'UMM AL-QURA CEMENT CO.',
            '4012.XSAU' => 'THOB AL ASEEL CO.',
            '3001.XSAU' => 'HAIL CEMENT CO.',
            '1212.XSAU' => 'ASTRA INDUSTRIAL GROUP',
            '2240.XSAU' => 'ZAMIL INDUSTRIAL INVESTMENT CO.',
            '4339.XSAU' => 'DERAYAH REIT FUND',
            '4320.XSAU' => 'ALANDALUS PROPERTY CO.',
            '1304.XSAU' => 'AL YAMAMAH STEEL INDUSTRIES CO.',
            '2320.XSAU' => 'AL-BABTAIN POWER AND TELECOMMUNICATION CO.',
            '6001.XSAU' => 'HALWANI BROS. CO.',
            '2340.XSAU' => 'AL ABDULLATIF INDUSTRIAL INVESTMENT CO.',
            '2001.XSAU' => 'METHANOL CHEMICALS CO.',
            '1320.XSAU' => 'SAUDI STEEL PIPE CO.',
            '1302.XSAU' => 'BAWAN CO.',
            '2140.XSAU' => 'AL-AHSA DEVELOPMENT CO.',
            '4345.XSAU' => 'SWICORP WABEL REIT FUND',
            '1820.XSAU' => 'ABDULMOHSEN ALHOKAIR GROUP FOR TOURISM AND DEVELOP',
            '1301.XSAU' => 'UNITED WIRE FACTORIES CO.',
            '7200.XSAU' => 'AL MOAMMAR INFORMATION SYSTEMS CO.',
            '2360.XSAU' => 'SAUDI VITRIFIED CLAY PIPES CO.',
            '8060.XSAU' => 'WALAA COOPERATIVE INSURANCE CO.',
            '4110.XSAU' => 'BATIC INVESTMENTS AND LOGISTICS CO.',
            '4230.XSAU' => 'RED SEA INTERNATIONAL CO.',
            '4335.XSAU' => 'MUSHARAKA REIT FUND',
            '4270.XSAU' => 'SAUDI PRINTING AND PACKAGING CO.',
            '1214.XSAU' => 'AL HASSAN GHAZI IBRAHIM SHAKER CO.',
            '4006.XSAU' => 'SAUDI MARKETING CO.',
            '1201.XSAU' => 'TAKWEEN ADVANCED INDUSTRIES CO.',
            '1303.XSAU' => 'ELECTRICAL INDUSTRIES CO.',
            '2120.XSAU' => 'SAUDI ADVANCED INDUSTRIES CO.',
            '3007.XSAU' => 'ZAHRAT AL WAHA FOR TRADING CO.',
            '1202.XSAU' => 'MIDDLE EAST PAPER CO.',
            '4290.XSAU' => 'ALKHALEEJ TRAINING AND EDUCATION CO.',
            '6070.XSAU' => 'AL-JOUF AGRICULTURE DEVELOPMENT CO.',
            '1210.XSAU' => 'BASIC CHEMICAL INDUSTRIES CO.',
            '8280.XSAU' => 'AL ALAMIYA FOR COOPERATIVE INSURANCE CO.',
            '4180.XSAU' => 'FITAIHI HOLDING GROUP',
            '4011.XSAU' => 'LAZURDE COMPANY FOR JEWELRY',
            '8080.XSAU' => 'SABB TAKAFUL CO.',
            '8012.XSAU' => 'ALJAZIRA TAKAFUL TAAWUNI CO.',
            '8200.XSAU' => 'SAUDI RE FOR COOPERATIVE REINSURANCE CO.',
            '2210.XSAU' => 'NAMA CHEMICALS CO.',
            '6060.XSAU' => 'ASH-SHARQIYAH DEVELOPMENT CO.',
            '4336.XSAU' => 'MULKIA GULF REAL ESTATE REIT',
            '4346.XSAU' => 'MEFIC REIT FUND',
            '6090.XSAU' => 'JAZAN ENERGY AND DEVELOPMENT CO.',
            '2200.XSAU' => 'ARABIAN PIPES CO.',
            '2150.XSAU' => 'THE NATIONAL COMPANY FOR GLASS INDUSTRIES',
            '8170.XSAU' => 'AL-ETIHAD COOPERATIVE INSURANCE CO.',
            '2030.XSAU' => 'SAUDI ARABIA REFINERIES CO.',
            '8270.XSAU' => 'BURUJ COOPERATIVE INSURANCE CO.',
            '4332.XSAU' => 'JADWA REIT AL HARAMAIN FUND',
            '8040.XSAU' => 'ALLIANZ SAUDI FRANSI COOPERATIVE INSURANCE CO.',
            '8020.XSAU' => 'MALATH COOPERATIVE INSURANCE CO.',
            '2090.XSAU' => 'NATIONAL GYPSUM CO.',
            '2160.XSAU' => 'SAUDI ARABIAN AMIANTIT CO.',
            '8070.XSAU' => 'ARABIAN SHIELD COOPERATIVE INSURANCE CO.',
            '6050.XSAU' => 'SAUDI FISHERIS CO.',
            '3008.XSAU' => 'AL KATHIRI HOLDING CO.',
            '2110.XSAU' => 'SAUDI CABLE CO.',
            '2180.XSAU' => 'FILING AND PACKING MATERIALS MANUFACTURING CO.',
            '4337.XSAU' => 'AL MASHAAR REIT',
            '8312.XSAU' => 'ALINMA TOKIO MARINE CO.',
            '8130.XSAU' => 'ALAHLI TAKAFUL CO.',
            '8150.XSAU' => 'ALLIED COOPERATIVE INSURANCE GROUP',
            '4051.XSAU' => 'BAAZEEM TRADING CO.',
            '8240.XSAU' => 'CHUBB ARABIA COOPERATIVE INSURANCE CO.',
            '8160.XSAU' => 'ARABIA INSURANCE COOPERATIVE CO.',
            '2220.XSAU' => 'NATIONAL METAL MANUFACTURING AND CASTING CO.',
            '9502.XSAU' => 'AL-OMRAN INDUSTRIAL TRADING CO.',
            '6040.XSAU' => 'TABUK AGRICULTURE DEVELOPMENT CO.',
            '8180.XSAU' => 'AL SAGR COOPERATIVE INSURANCE CO.',
            '2370.XSAU' => 'MIDDLE EAST SPECIALIZED CABLES CO.',
            '4140.XSAU' => 'SAUDI INDUSTRIAL EXPORT CO.',
            '6020.XSAU' => 'AL GASSIM INVESTMENT HOLDING CO .',
            '8190.XSAU' => 'UNITED COOPERATIVE ASSURANCE CO.',
            '6012.XSAU' => 'RAYDAN FOOD CO.',
            '8300.XSAU' => 'WATANIYA INSURANCE CO.',
            '8290.XSAU' => 'SOLIDARITY SAUDI TAKAFUL CO.',
            '2130.XSAU' => 'SAUDI INDUSTRIAL DEVELOPMENT CO.',
            '4191.XSAU' => 'ABDULLAH SAAD MOHAMMED ABO MOATI FOR BOOKSTORES CO',
            '8100.XSAU' => 'SAUDI ARABIAN COOPERATIVE INSURANCE CO.',
            '8050.XSAU' => 'SALAMA COOPERATIVE INSURANCE CO.',
            '8311.XSAU' => 'SAUDI ENAYA COOPERATIVE INSURANCE CO.',
            '9505.XSAU' => 'ARAB SEA INFORMATION SYSTEM CO.',
            '4130.XSAU' => 'AL BAHA INVESTMENT & DEVELOPMENT CO.',
            '8310.XSAU' => 'AMANA COOPERATIVE INSURANCE CO.',
            '1213.XSAU' => 'AMANA COOPERATIVE INSURANCE CO',
            '4070.XSAU' => 'TIHAMA ADVERTISING AND PUBLIC RELATIONS CO.',
            '4170.XSAU' => 'TOURISM ENTERPRISE CO.',
            '2100.XSAU' => 'WAFRAH FOR INDUSTRY AND DEVELOPMENT CO.',
            '8260.XSAU' => 'GULF GENERAL COOPERATIVE INSURANCE CO.',
            '2300.XSAU' => 'SAUDI PAPER MANUFACTURING CO.',
            '9504.XSAU' => 'AL-SAMAANI FACTORY FOR METAL INDUSTRIES CO.',
            '8120.XSAU' => 'GULF UNION COOPERATIVE INSURANCE CO.',
            '9501.XSAU' => 'DEVELOPMENT WORKS FOOD CO.',
            '8140.XSAU' => 'AL-AHLIA INSURANCE CO.',
            '1182.XSAU' => 'Amlak International for Real Estate Finance Company',
            '4013.XSAU' => 'Dr. Sulaiman Al Habib Medical Services Group Company',
            '4061.XSAU' => 'Anaam International Holding Group Company',
            '4331.XSAU' => 'Aljazira Mawten REIT Fund',
            '4333.XSAU' => 'Taleem REIT Fund',
            '4334.XSAU' => 'Al Maather Reit Fund',
            '4348.XSAU' => 'Alkhabeer REIT Fund',
            '9500.XSAU' => 'Abdullah Saad Mohammed Abo Moati Stationaries Comp',
            '9503.XSAU' => 'Baazeem Trading Co',
            '9506.XSAU' => 'Raydan Food Co',
            '9507.XSAU' => 'Thob Al Aseel Co',
            '9508.XSAU' => 'Al Kathiri Holding Company',
            '2081.XSAU' => 'Alkhorayef Water & Power Tech',
            '4261.XSAU' => 'Theeb Rent a Car Co',
            '9512.XSAU' => 'RIYADH CEMENT CO',
        ];




        $current_stock = (new Stock)->take(100)->get();
        $current_news = (new News)->where('created_at', '>=', Carbon::now()->subMinutes(30)->format('Y-m-d H:i:s'))->orderBy('id', 'desc')->take(3)->get();

        if ($current_stock->count() == 0) {
            $queryString = http_build_query([
                'access_key' => env('STOCK_API_KEY'),
                'exchange' => 'XSAU',
                'symbols' => '2222.XSAU,2010.XSAU,7010.XSAU,1120.XSAU,1180.XSAU,5110.XSAU,1010.XSAU,1060.XSAU,1090.XSAU,1211.XSAU,2280.XSAU,1050.XSAU,1080.XSAU,1150.XSAU,2020.XSAU,2290.XSAU,4250.XSAU,4280.XSAU,4190.XSAU,1140.XSAU,2050.XSAU,7020.XSAU,2380.XSAU,4321.XSAU,2350.XSAU,4030.XSAU,8210.XSAU,2310.XSAU,1020.XSAU,4100.XSAU,2002.XSAU,1030.XSAU,4300.XSAU,2330.XSAU,2250.XSAU,3030.XSAU,4002.XSAU,8010.XSAU,3050.XSAU,2060.XSAU,4220.XSAU,6004.XSAU,4001.XSAU,3040.XSAU,4031.XSAU,4240.XSAU,7030.XSAU,3060.XSAU,1810.XSAU,4210.XSAU,3020.XSAU,4090.XSAU,2270.XSAU,1830.XSAU,4004.XSAU,4003.XSAU,4200.XSAU,4020.XSAU,3010.XSAU,2070.XSAU,3003.XSAU,4310.XSAU,6002.XSAU,3080.XSAU,1831.XSAU,4150.XSAU,4009.XSAU,4007.XSAU,4010.XSAU,8230.XSAU,4260.XSAU,2080.XSAU,2040.XSAU,6010.XSAU,3004.XSAU,2170.XSAU,4040.XSAU,4005.XSAU,3002.XSAU,2230.XSAU,2190.XSAU,4342.XSAU,4050.XSAU,4008.XSAU,8030.XSAU,4347.XSAU,8250.XSAU,4292.XSAU,4340.XSAU,4330.XSAU,3090.XSAU,4080.XSAU,9510.XSAU,4291.XSAU,3091.XSAU,4338.XSAU,3005.XSAU,4012.XSAU,3001.XSAU,1212.XSAU'
            ]);

            $ch = curl_init(sprintf('%s?%s', 'http://api.marketstack.com/v1/eod/latest', $queryString));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $json = curl_exec($ch);
            curl_close($ch);

            $apiResult = json_decode($json, true);




            foreach ($apiResult['data'] as $index => $value) {
                if($apiResult['data'][$index] == [])
                    continue;
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
        $current_stocks = (new Stock)->take(100)->get();
        $current_news = (new News)->where('created_at', '>=', Carbon::now()->subMinutes(30)->format('Y-m-d H:i:s'))->orderBy('id', 'desc')->take(3)->get();



        return view('welcome', compact(['slider_configuration', 'about_configuration', 'service_configurations', 'footer_configuration', 'choose_configuration', 'heading', 'current_stocks', 'current_news']));


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


        $message = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,


        ]);

        $to = 'aniqk755@gmail.com';
        Mail::to($to)->send(new ContactMail($message));
        return back()->withSuccess('Message Successfully sent!');
    }


    public function getMessages()
    {
        $messages = Message::all();
        return view('manage-messages', compact('messages'));


    }
    public function getIpoReadinessDoc()
    {
        $footer_configuration = FooterConfiguration::first();
        $current_stocks = (new Stock)->where('date', \Illuminate\Support\Carbon::yesterday()->toDateString())->get();
        return view('ipo-readiness', compact('footer_configuration','current_stocks'));
    }
    public function getNews()
    {
        $current_news = (new News)::orderBy('id', 'DESC')->take(10)->get();
        $data['view'] = View('components.blogs',
            ['current_news' => $current_news])->render();

        return $data;


    }
    public function getChooseUs()
    {
        $choose_configuration = ChooseUsConfiguration::first();
        $data['view'] = View('components.choose-us',
            ['choose_configuration' => $choose_configuration])->render();

        return $data;


    }

    public function getLatestPosts()
    {
        $current_news = (new News)::orderBy('id', 'DESC')->take(3)->get();
        $data['view'] = View('components.latest-posts',
            ['current_news' => $current_news])->render();

        return $data;


    }
    public function getContactUs()
    {

        $footer_configuration = FooterConfiguration::first();
        $current_stocks = (new Stock)->where('date', \Illuminate\Support\Carbon::yesterday()->toDateString())->get();
        return view('contact-us', compact(['footer_configuration','current_stocks']));

    }
    public function getBlogDetail($slug)
    {
        $footer_configuration = FooterConfiguration::first();
        $current_stocks = (new Stock)->where('date', \Illuminate\Support\Carbon::yesterday()->toDateString())->get();
        $url = env('BASE_URL').'/blogs/'.$slug;
        $blog = News::where('url',$url)->first();
        $current_news = (new News)->where('url','!=',$url)->orderBy('id', 'desc')->take(5)->get();

        return view('blog-detail', compact('blog','footer_configuration','current_stocks','current_news'));


    }


}
