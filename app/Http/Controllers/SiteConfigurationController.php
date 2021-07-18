<?php

namespace App\Http\Controllers;

use App\Models\AboutConfiguration;
use App\Models\ServiceConfiguration;
use App\Models\SliderConfiguration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class SiteConfigurationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function manageSliders()
    {
        $slider_configuration = (new SliderConfiguration)->where('id', 1)->first();
        return view('manage-sliders', compact('slider_configuration'));
    }

    public function manageAbout()
    {
        $about_configuration = (new AboutConfiguration)->where('id', 1)->first();

        return view('about-us', compact('about_configuration'));
    }

    public function manageServices()
    {
        $service_configuration = (new ServiceConfiguration)->where('id', 1)->first();

        return view('manage-services', compact('service_configuration'));
    }

    public function postSliders(Request $request)
    {
        $filename_new_1 = '';
        $filename_new_2 = '';
        $slider_configuration = (new SliderConfiguration)->where('id', 1)->first();


        $filename_1 = public_path('assets/images/slider/') . $slider_configuration->image_slider1;
        $filename_2 = public_path('assets/images/slider/') . $slider_configuration->image_slider2;


        if (File::exists($filename_1)) {
            File::delete($filename_1);  // or unlink($filename);

            $filename_new_1 = "1" . '.' . $request->file('image_slider1')->getClientOriginalExtension();
            Image::make($request->file('image_slider1'))->save(public_path('assets/images/slider/' . $filename_new_1));
        }


        if (File::exists($filename_2)) {
            File::delete($filename_2);  // or unlink($filename);

            $filename_new_2 = "2" . '.' . $request->file('image_slider1')->getClientOriginalExtension();
            Image::make($request->file('image_slider2'))->save(public_path('assets/images/slider/' . $filename_new_2));

        }


        $slider_configuration->update([
            'sl_subtitle_1' => $request->sl_subtitle_1,
            'image_slider1' => $filename_new_1,
            'image_slider2' => $filename_new_2,
            'sl_subtitle_2' => $request->sl_subtitle_2,
            'sl_title_1' => $request->sl_title_1,
            'sl_title_2' => $request->sl_title_2,

        ]);
        return back()->withSuccess('Sliders Data Successfully Updated!');


    }

    public function postAbout(Request $request)
    {
        $about_configuration = (new AboutConfiguration)->where('id', 1)->first();
        $filename_1 = public_path('assets/images/about/') . $about_configuration->image_about;
        $filename_new_1 = '';
        if (File::exists($filename_1)) {
            File::delete($filename_1);  // or unlink($filename);

            $filename_new_1 = "about_image" . '.' . $request->file('image_about')->getClientOriginalExtension();
            Image::make($request->file('image_slider1'))->save(public_path('assets/images/about/' . $filename_new_1));
        }

        $about_configuration->update([
            'about_us_title' => $request->about_us_title,
            'about_us_subtitle' => $request->about_us_subtitle,
            'about_us_desc' => $request->about_us_desc,
            'image_about' => $filename_new_1,


        ]);
        return back()->withSuccess('About Us Successfully Updated!');


    }

    public
    function postServices(Request $request)
    {
        $service_configuration = (new ServiceConfiguration)->where('id', 1)->first();
        $service_configuration->update([
            'service_title_1' => $request->service_title_1,
            'service_title_2' => $request->service_title_2,
            'service_title_3' => $request->service_title_3,
            'service_title_4' => $request->service_title_4,
            'service_title_5' => $request->service_title_5,
            'service_title_6' => $request->service_title_6,
            'service_title_7' => $request->service_title_7,
            'service_title_8' => $request->service_title_8,
            'service_desc_1' => $request->service_desc_1,
            'service_desc_2' => $request->service_desc_2,
            'service_desc_3' => $request->service_desc_3,
            'service_desc_4' => $request->service_desc_4,
            'service_desc_5' => $request->service_desc_5,
            'service_desc_6' => $request->service_desc_6,
            'service_desc_7' => $request->service_desc_7,
            'service_desc_8' => $request->service_desc_8,


        ]);
        return back()->withSuccess('Services Data Successfully Updated!');


    }

}
