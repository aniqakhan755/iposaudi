<?php

namespace App\Http\Controllers;

use App\Models\AboutConfiguration;
use App\Models\ChooseUsConfiguration;
use App\Models\FooterConfiguration;
use App\Models\Heading;
use App\Models\Ipos;
use App\Models\News;
use App\Models\ServiceConfiguration;
use App\Models\SliderConfiguration;
use Carbon\Carbon;
use DateTime;
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
        $slider_configuration = SliderConfiguration::first();
        return view('manage-sliders', compact('slider_configuration'));
    }

    public function manageBlogs()
    {
        $news = News::orderBy('id', 'Desc')->take(10)->get();

        return view('manage-blogs', compact('news'));
    }

    public function manageIPOs()
    {
        $ipos = Ipos::orderBy('id', 'Desc')->get();

        return view('manage-ipos', compact('ipos'));
    }

    public function manageChooseUs()
    {
        $choose_configuration = ChooseUsConfiguration::first();
        return view('manage-choose-us', compact('choose_configuration'));
    }

    public function createBlogPost()
    {

        return view('create-blog');
    }

    public function addIPO()
    {

        return view('add-ipo');
    }

    public function manageAbout()
    {
        $about_configuration = AboutConfiguration::first();

        return view('about-us', compact('about_configuration'));
    }

    public function manageServices()
    {
        $service_configurations = (new ServiceConfiguration)->all();
        $heading = (new Heading)->first();

        return view('manage-services', compact('service_configurations', 'heading'));
    }

    public function manageFooter()
    {
        $footer_configuration = FooterConfiguration::first();

        return view('manage-footer', compact('footer_configuration'));
    }


    public function postSliders(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'image_slider1' => 'nullable|image|mimes:jpeg,png,jpg',
            'image_slider2' => 'nullable|image|mimes:jpeg,png,jpg',
            'mobile_slider2' => 'nullable|image|mimes:jpeg,png,jpg',
            'mobile_slider1' => 'nullable|image|mimes:jpeg,png,jpg',
            'sl_title_1' => 'required',
            'sl_title_2' => 'required',
            'sl_subtitle_2' => 'required',
            'sl_subtitle_1' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Error storing record, try again.');
        }
        $filename_new_1 = '';
        $filename_new_2 = '';
        $filename_new_3 = '';
        $filename_new_4 = '';
        $slider_configuration = (new SliderConfiguration)->first();
        $filename_1 = public_path('assets/images/slider/') . $slider_configuration->image_slider1;
        $filename_2 = public_path('assets/images/slider/') . $slider_configuration->image_slider2;
        $filename_3 = public_path('assets/images/slider/') . $slider_configuration->mobile_slider1;
        $filename_4 = public_path('assets/images/slider/') . $slider_configuration->mobile_slider2;
        if ($request->has('image_slider1')) {
            if (File::exists($filename_1)) {
                File::delete($filename_1);  // or unlink($filename);


            }
            $filename_new_1 = "1" . '.webp';
            $img = \Intervention\Image\Facades\Image::make($request->file('image_slider1'))->fit(1920, 850, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('webp', 0.7);
            $img->save(public_path('assets/images/slider/' . $filename_new_1));

        }
        if ($request->has('image_slider2')) {
            if (File::exists($filename_2)) {
                File::delete($filename_2);  // or unlink($filename);


            }
            $filename_new_2 = "2" . '.webp';

            $img = \Intervention\Image\Facades\Image::make($request->file('image_slider2'))->fit(1920, 850, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('webp', 0.7);
            $img->save(public_path('assets/images/slider/' . $filename_new_2));


        }
        if ($request->has('mobile_slider1')) {
            if (File::exists($filename_3)) {
                File::delete($filename_3);  // or unlink($filename);


            }
            $filename_new_3 = "mobile-1" . '.webp';

            $img = \Intervention\Image\Facades\Image::make($request->file('mobile_slider1'))->fit(600, 850, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('webp', 0.7);
            $img->save(public_path('assets/images/slider/' . $filename_new_3));


        }
        if ($request->has('mobile_slider2')) {
            if (File::exists($filename_4)) {
                File::delete($filename_4);  // or unlink($filename);


            }
            $filename_new_4 = "mobile-2" . '.webp';
            $img = \Intervention\Image\Facades\Image::make($request->file('mobile_slider2'))->fit(600, 850, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('webp', 0.7);
            $img->save(public_path('assets/images/slider/' . $filename_new_4));
//            Image::make($request->file('mobile_slider2'))->save(public_path('assets/images/slider/' . $filename_new_4));

        }


        $slider_configuration->update([
            'sl_subtitle_1' => $request->sl_subtitle_1,
            'image_slider1' => ($request->has('image_slider1')) ? ($filename_new_1) : ($slider_configuration->image_slider1),
            'image_slider2' => ($request->has('image_slider2')) ? ($filename_new_2) : ($slider_configuration->image_slider2),
            'sl_subtitle_2' => $request->sl_subtitle_2,
            'sl_title_1' => $request->sl_title_1,
            'sl_title_2' => $request->sl_title_2,
            'mobile_slider1' => ($request->has('mobile_slider1')) ? ($filename_new_3) : ($slider_configuration->mobile_slider1),
            'mobile_slider2' => ($request->has('mobile_slider2')) ? ($filename_new_4) : ($slider_configuration->mobile_slider2),

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
        $about_configuration = (new AboutConfiguration)->first();
        $filename_1 = public_path('assets/images/about/') . $about_configuration->image_about;

        $filename_new_1 = '';
        if ($request->has('image_about')) {
            if (File::exists($filename_1)) {
                File::delete($filename_1);  // or unlink($filename);
            }
            $filename_new_1 = "about_image" . '.webp';
            $img = \Intervention\Image\Facades\Image::make($request->file('image_about'))->fit(570, 370, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('webp', 0.7);
            $img->save(public_path('assets/images/about/' . $filename_new_1));

//            $filename_new_1 = "about_image" . '.' . $request->file('image_about')->getClientOriginalExtension();
//
//            Image::make($request->file('image_about'))->save(public_path('assets/images/about/' . $filename_new_1));
        }
        $about_configuration->update([
            'about_us_title' => $request->about_us_title,
            'about_us_subtitle' => $request->about_us_subtitle,
            'about_us_desc' => $request->about_us_desc,
            'image_about' => ($request->has('image_about')) ? ($filename_new_1) : ($about_configuration->image_about),


        ]);
        return back()->withSuccess('About Us Successfully Updated!');


    }

    public function postBlog(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'image' => 'nullable|image|mimes:jpeg,jpg,webp',
            'title' => 'required',
            'description' => 'required',
            'blog_content' => 'required',

        ]);
        $file_syntax = str_replace(' ', '-', strtolower($request->title));
        $base_url = env('BASE_URL');


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Error storing record, try again.');
        }
        $files = [['width' => 770, 'height' => 300], ['width' => 350, 'height' => 200], ['width' => 80, 'height' => 45]];

        $filename_new_1 = '';
        if ($request->has('image')) {
            foreach ($files as $file) {
                $filename_new_1 = $file_syntax . '-' . $file['width'] . 'x' . $file['height'] . '.webp';
                $img = \Intervention\Image\Facades\Image::make($request->file('image'))->fit($file['width'], $file['height'], function ($constraint) {
                    $constraint->aspectRatio();
                })->encode('webp', 0.7);
                $img->save(public_path('assets/images/blogs/' . $filename_new_1));
            }
        }

        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->blog_content,
            'image' => $base_url . '/assets/images/blogs/' . $file_syntax . '-' . 350 . 'x' . 200 . '.webp',
            'url' => $base_url . '/blogs/' . $file_syntax,
            'pulished_date' => date('Y-m-d H:i:s'),
            'source_name' => 'N/A',
            'source_url' => 'N/A'


        ]);
        return redirect()->route('manage.blogs')->withSuccess('Blog successfully posted!');


    }

    public function postIPO(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'company_name' => 'required',
            'market_type' => 'required',
            'instrument' => 'required',
            'offering_size' => 'required',
            'offering_price' => 'required',
            'offering_date' => 'required',
            'closing_date' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Error storing record, try again.');
        }
        $closing_date = Carbon::createFromFormat('Y/m/d', $request->closing_date)->format('Y-m-d');
        $offering_date = Carbon::createFromFormat('Y/m/d', $request->offering_date)->format('Y-m-d');


        Ipos::create([
            'company_name' => $request->company_name,
            'market_type' => $request->market_type,
            'instrument' => $request->instrument,
            'offering_price' => $request->offering_price,
            'offering_size' => $request->offering_size,
            'offering_date' => $offering_date,
            'closing_date' => $closing_date,


        ]);
        return redirect()->route('manage.ipos')->withSuccess('IPO successfully added!');


    }

    public function postServices(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_title' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Error storing record, try again.');
        }
        $service_configuration = (new ServiceConfiguration)->where('id', $request->service_id)->first();

        $service_configuration->update([
            'service_title' => $request->service_title,
            'service_desc' => 'null',


        ]);

        return back()->withSuccess('Services Data Successfully Updated!');


    }

    public function postServicesHeading(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_heading' => 'required',
            'service_subheading' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Error storing record, try again.');
        }

        $heading = (new Heading)->first();

        $heading->update([
            'service_heading' => $request->service_heading,
            'service_subheading' => $request->service_subheading,


        ]);
        return back()->withSuccess('Services Heading Successfully Updated!');


    }

    public function postFooter(Request $request)
    {


        $footer_configuration = (new FooterConfiguration)->first();
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
        $filename_1 = public_path('assets/images/footer/') . $footer_configuration->footer_bg;

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
            'footer_bg' => ($request->has('footer_bg')) ? ($filename_new_1) : ($footer_configuration->footer_bg),


        ]);
        return back()->withSuccess('Footer Data Successfully Updated!');


    }

    public function postChooseUs(Request $request)
    {

        $choose_configuration = (new ChooseUsConfiguration)->first();
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
        $choose_configuration = (new ChooseUsConfiguration)->where('id', 1)->first();
        $filename_1 = public_path('assets/images/whychooseus/') . $choose_configuration->image_choose_us;

        $filename_new_1 = '';
        if ($request->has('image_choose_us')) {
            if (File::exists($filename_1)) {
                File::delete($filename_1);  // or unlink($filename);
            }
            $filename_new_1 = "image_choose_us" . '.webp';
            $img = \Intervention\Image\Facades\Image::make($request->file('image_choose_us'))->fit(750, 730, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('webp', 0.7);
            $img->save(public_path('assets/images/whychooseus/' . $filename_new_1));

//            $filename_new_1 = "image_choose_us" . '.' . $request->file('image_choose_us')->getClientOriginalExtension();
//
//            Image::make($request->file('image_choose_us'))->save(public_path('assets/images/whychooseus/' . $filename_new_1));
        }

        $choose_configuration->update([
            'choose_us_title' => $request->choose_us_title,
            'heading_1' => $request->heading_1,
            'heading_2' => $request->heading_2,
            'heading1_desc' => $request->heading1_desc,
            'heading2_desc' => $request->heading2_desc,
            'image_choose_us' => ($request->has('image_choose_us')) ? ($filename_new_1) : ($choose_configuration->image_choose_us),
        ]);
        return back()->withSuccess('Choose Us Data Successfully Updated!');


    }

}
