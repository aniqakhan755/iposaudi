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
            'image_slider1' => '1.jpg',
            'image_slider2' => '2.jpg',
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
        DB::table('choose_us_configurations')->insert([
            'choose_us_title' => '25+ years of professional experience in Finance, Accounting and ERP.',
            'image_choose_us' => 'h8-left-img.jpg',
            'heading_1' => 'Strategic CFO / Finance Executive with 25+ years of established career',
            'heading_2' => 'Diversified industry experience; increasing productivity, efficiency and profitability',
            'heading1_desc' => '•	Certified, Strategic and Visionary CFO capable to efficiently and effectively manage large business
•	Financial professional with top level finance, management & business operations experience
•	Well versed in Finance, Accounting, Auditing, Taxation, Costing. Budgeting & Planning
•	Career span underscored with senior positions entailing driving strong business performance, developing financial and operational strategies, strategic & financial analysis, financial modeling, forecasting & budgeting, cash flow management, costing, review, compliance & audits',
            'heading2_desc' => '•	Recognized for direct financial management and audit management for diverse industrial sectors
•	Instrumental in establishing and strategizing business operations
•	Business and financial proficiency in industries such as Telecom/IT, Manufacturing, Military, Education & Training, Services, Retail & Trading and Construction / Contracting
•	Business knowledge of Cloud Computing, Virtualization, ERP, CRM and SCM coupled with effective communication and presentation skills',


        ]);
        $services = [
            'Employment Services' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'Gaining Experience' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'Technology Evaluation' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'Finding Job' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'Team Leadership' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'Better Communication' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'Vocational Training' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'Employablility Training' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'Service 9' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'Service 10' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'Service 11' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',
            'Service 12' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.',

        ];
        foreach ($services as $key => $value) {
            $count = 1;
            DB::table('service_configurations')->insert([
                'service_title' => $key,
                'service_desc' => $value,
                'service_icon' => $count . '.png'


            ]);

        }

        DB::table('footer_configurations')->insert([
            'footer_bg' => 'footer-bg3.jpg',
            'address' => '374 William S Canning Blvd, Fall River MA 2721, USA',
            'phone' => '(+880)173-9753105',
            'email' => 'support@rstheme.com',
            'time' => '10:00 - 17:00',
            'footer_description' => 'We denounce with righteous indignation in and dislike men who are so beguiled and to demo realized by the charms of pleasure moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.'
        ]);


    }
}
