<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       DB::table('slider_configurations')->insert([
            'sl_subtitle_1' => 'Your People, Our System',
            'image_slider1'=> '1.jpg',
            'image_slider2'=> '2.jpg',
            'sl_title_1' => 'We explore your ability and employment solutions',
            'sl_title_2' => 'We Ensure Balancing Employee and Managing Your HR Rules',
            'sl_subtitle_2' => 'Your People, Our System',

        ]);
        DB::table('about_configurations')->insert([
            'about_us_title' => 'Choose Reobiz For Your',
            'about_us_subtitle' => 'HR Management',
            'image_about' => 'h8-left-img.jpg',
            'about_us_desc' => 'Id hinc sapientem eam, has novum putent an. Ei sit definiebas concludaturque, cum ad sanctus ocurreret. Wisi eruditi democritum est an, porro noluisse ut pri, ne tantas essent corpora vel. Ponderum recusabo vim te. Elitr verear praesent has ne.',

        ]);
        DB::table('service_configurations')->insert([
            'service_title_1' => 'Employment Services',
            'service_title_2' => 'Gaining Experience',
            'service_title_3' => 'Technology Evaluation',
            'service_title_4' => 'Finding Job',
            'service_title_5' => 'Team Leadership',
            'service_title_6' => 'Better Communication',
            'service_title_7' => 'Vocational Training',
            'service_title_8' => 'Employablility Training',
            'service_desc_1' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'service_desc_2' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'service_desc_3' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'service_desc_4' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'service_desc_5' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'service_desc_6' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'service_desc_7' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'service_desc_8' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',


        ]);


    }
}
