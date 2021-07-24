<?php

namespace App\Http\Controllers;

use App\Models\AboutConfiguration;
use App\Models\ChooseUsConfiguration;
use App\Models\FooterConfiguration;
use App\Models\ServiceConfiguration;
use App\Models\SliderConfiguration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
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
    public function manageChooseUs()
    {
        $choose_configuration = (new ChooseUsConfiguration)->where('id', 1)->first();
        return view('manage-choose-us', compact('choose_configuration'));
    }

    public function manageAbout()
    {
        $about_configuration = (new AboutConfiguration)->where('id', 1)->first();

        return view('about-us', compact('about_configuration'));
    }

    public function manageServices()
    {
        $service_configurations = (new ServiceConfiguration)->all();

        return view('manage-services', compact('service_configurations'));
    }
    public function manageFooter()
    {
        $footer_configuration = (new FooterConfiguration)->where('id', 1)->first();

        return view('manage-footer', compact('footer_configuration'));
    }

    public function postSliders(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'image_slider1' => 'nullable|image|mimes:jpeg,png,jpg',
            'image_slider2' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Error storing record, try again.');
        }
        $filename_new_1 = '';
        $filename_new_2 = '';
        $slider_configuration = (new SliderConfiguration)->where('id', 1)->first();
        $filename_1 = public_path('assets/images/slider/') . $slider_configuration->image_slider1;
        $filename_2 = public_path('assets/images/slider/') . $slider_configuration->image_slider2;
        if ($request->has('image_slider1')) {
            if (File::exists($filename_1)) {
                File::delete($filename_1);  // or unlink($filename);


            }
            $filename_new_1 = "1" . '.' . $request->file('image_slider1')->getClientOriginalExtension();
            Image::make($request->file('image_slider1'))->save(public_path('assets/images/slider/' . $filename_new_1));

        }
        if ($request->has('image_slider2')) {
            if (File::exists($filename_2)) {
                File::delete($filename_2);  // or unlink($filename);


            }
            $filename_new_2 = "2" . '.' . $request->file('image_slider2')->getClientOriginalExtension();
            Image::make($request->file('image_slider2'))->save(public_path('assets/images/slider/' . $filename_new_2));

        }


        $slider_configuration->update([
            'sl_subtitle_1' => $request->sl_subtitle_1,
            'image_slider1' => ($request->has('image_slider1')) ? ($filename_new_1) : ($slider_configuration->image_slider1),
            'image_slider2' => ($request->has('image_slider2')) ? ($filename_new_2) : ($slider_configuration->image_slider2),
            'sl_subtitle_2' => $request->sl_subtitle_2,
            'sl_title_1' => $request->sl_title_1,
            'sl_title_2' => $request->sl_title_2,

        ]);
        return back()->withSuccess('Sliders Data Successfully Updated!');


    }

    public function postAbout(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'image_about' => 'nullable|image|mimes:jpeg,png,jpg',
            'about_us_title' => 'required',
            'about_us_desc' => 'required',
            'about_us_subtitle' => 'required',

        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Error storing record, try again.');
        }
        $about_configuration = (new AboutConfiguration)->where('id', 1)->first();
        $filename_1 = public_path('assets/images/about/') . $about_configuration->image_about;

        $filename_new_1 = '';
        if ($request->has('image_about')) {
            if (File::exists($filename_1)) {
                File::delete($filename_1);  // or unlink($filename);
            }
            $filename_new_1 = "about_image" . '.' . $request->file('image_about')->getClientOriginalExtension();

            Image::make($request->file('image_about'))->save(public_path('assets/images/about/' . $filename_new_1));
        }
        $about_configuration->update([
            'about_us_title' => $request->about_us_title,
            'about_us_subtitle' => $request->about_us_subtitle,
            'about_us_desc' => $request->about_us_desc,
            'image_about' => ($request->has('image_about')) ? ($filename_new_1) : ($about_configuration->image_about),


        ]);
        return back()->withSuccess('About Us Successfully Updated!');


    }

    public function postServices(Request $request)
    {
        $service_configuration = (new ServiceConfiguration)->where('id',$request->service_id)->first();

        $service_configuration->update([
            'service_title' => $request->service_title,
            'service_desc' => $request->service_desc,


        ]);
        return back()->withSuccess('Services Data Successfully Updated!');


    }
    public function postFooter(Request $request)
    {

        $footer_configuration = (new FooterConfiguration)->where('id',1)->first();
        $validator = Validator::make($request->all(), [

            'footer_bg' => 'nullable|image|mimes:jpeg,png,jpg',
            'footer_description' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'facebook_url' => 'required',
            'twitter_url' => 'required',
            'instagram_url' => 'required',
            'linked_in_url' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Error storing record, try again.');
        }
        $about_configuration = (new AboutConfiguration)->where('id', 1)->first();
        $filename_1 = public_path('assets/images/footer/') . $about_configuration->footer_bg;

        $filename_new_1 = '';
        if ($request->has('footer_bg')) {
            if (File::exists($filename_1)) {
                File::delete($filename_1);  // or unlink($filename);
            }
            $filename_new_1 = "footer_bg" . '.' . $request->file('footer_bg')->getClientOriginalExtension();

            Image::make($request->file('footer_bg'))->save(public_path('assets/images/footer/' . $filename_new_1));
        }

        $footer_configuration->update([
            'footer_description' => $request->footer_description,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'facebook_url' => $request->facebook_url,
            'twitter_url' => $request->twitter_url,
            'instagram_url' => $request->instagram_url,
            'linked_in_url' => $request->linked_in_url,
            'footer_bg' => ($request->has('footer_bg')) ? ($filename_new_1) : ($about_configuration->footer_bg),


        ]);
            return back()->withSuccess('Footer Data Successfully Updated!');


    }
    public function postChooseUs(Request $request)
    {

        $choose_configuration = (new ChooseUsConfiguration)->where('id',1)->first();
        $validator = Validator::make($request->all(), [
            'image_choose_us' => 'nullable|image|mimes:jpeg,png,jpg',
            'choose_us_title' => 'required',
            'heading_1' => 'required',
            'heading_2' => 'required',
            'heading1_desc' => 'required',
            'heading2_desc' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Error storing record, try again.');
        }
        $about_configuration = (new AboutConfiguration)->where('id', 1)->first();
        $filename_1 = public_path('assets/images/whychooseus/') . $about_configuration->image_choose_us;

        $filename_new_1 = '';
        if ($request->has('image_choose_us')) {
            if (File::exists($filename_1)) {
                File::delete($filename_1);  // or unlink($filename);
            }
            $filename_new_1 = "image_choose_us" . '.' . $request->file('image_choose_us')->getClientOriginalExtension();

            Image::make($request->file('image_choose_us'))->save(public_path('assets/images/whychooseus/' . $filename_new_1));
        }

        $choose_configuration->update([
            'choose_us_title' => $request->choose_us_title,
            'heading_1' =>  $request->heading_1,
            'heading_2' =>  $request->heading_2,
            'heading1_desc' =>  $request->heading1_desc,
            'heading2_desc' =>  $request->heading2_desc,
            'image_choose_us' => ($request->has('image_choose_us')) ? ($filename_new_1) : ($about_configuration->image_choose_us),
        ]);
        return back()->withSuccess('Choose Us Data Successfully Updated!');


    }

}
