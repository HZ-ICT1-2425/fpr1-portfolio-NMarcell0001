<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run()
    {
        $faqs = [
            ['question' => '1. How do you print on your laptop?', 'answer' => '1. Open https://hz.mynetpay.nl/ this website and then
                    click on Upload files now. Then, use your HZ card at the printer to print the doc.
                    2. Log in with your HZ user and password
                    3. Tap Web Print
                    4. At Step 1 select a printer, check the settings (format, single/double sided,
                    etc.
                    5. Click in the field Step 2: Select files to choose your files
                    6. Click on Upload files now. Then, use your HZ card at the printer to print the
                    doc.
                    '],
            [
                'question' => '2. How do you scan a document?',
                'answer' => '1. Log onto your printer using your HZ card by entering your HZ user and password.
                     2. Choose the Scan option in the menu.
                     3. Place the document on the glass plate.
                     4. Press Start.
                     5. After scanning, press the symbol in the top right corner to log off.'
            ],
            [
                'question' => '3. How do you buy something on the web shop?',
                'answer' => '1. Go to the https://webshop.hz.nl/ web shops page
                     2. Put the desired item in the cart (Click the "order" button).
                     3. Go to the checkout and pay for the item.'],
            [
                'question' => '4. How do you book a project space?',
                'answer' => '1. Go to https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner this website.
                     2. Book a room.'],
            [
                'question' => '5. What are the instructions if you want to park your car at the HZ parking lot?',
                'answer' => '1. It is possible at Kousteensedijk, but you have to request cards at the JRCZ service desk.']


        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
