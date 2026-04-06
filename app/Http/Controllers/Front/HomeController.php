<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    private function sharedData(): array
    {
        return [
            'siteName' => 'H to O Advertising & Design',
            'whatsappNumber' => '201025006905',
            'logoUrl' => 'https://imgg.io/images/2026/04/05/68f1178fd72091a534dacdea6f2b7509.jpg',
            'works' => [
                [
                    'image' => 'https://imgg.io/images/2026/04/05/bf359d71e1e094089907e29fbc680927.jpg',
                    'title_ar' => 'عمل دعائي مميز',
                    'title_en' => 'Featured Branding Work',
                ],
                [
                    'image' => 'https://imgg.io/images/2026/04/05/fd36aa52bcbc9b4400bba91df6c46ac6.jpg',
                    'title_ar' => 'تنفيذ احترافي',
                    'title_en' => 'Professional Production',
                ],
            ],
            'services' => [
                [
                    'icon' => '🖨️',
                    'title_ar' => 'طباعة المجات',
                    'title_en' => 'Mug Printing',
                    'desc_ar' => 'طباعة احترافية على المجات بجودة عالية وألوان ثابتة.',
                    'desc_en' => 'Professional mug printing with premium quality and vivid colors.',
                ],
                [
                    'icon' => '🖱️',
                    'title_ar' => 'طباعة بادات الماوس',
                    'title_en' => 'Mouse Pad Printing',
                    'desc_ar' => 'تنفيذ مخصص لبادات الماوس للشركات والأفراد.',
                    'desc_en' => 'Custom mouse pad printing for businesses and individuals.',
                ],
                [
                    'icon' => '💳',
                    'title_ar' => 'كروت شخصية',
                    'title_en' => 'Business Cards',
                    'desc_ar' => 'تصميم وطباعة كروت شخصية بشكل أنيق واحترافي.',
                    'desc_en' => 'Elegant and professional business card design and printing.',
                ],
                [
                    'icon' => '🎨',
                    'title_ar' => 'تصميمات دعائية',
                    'title_en' => 'Advertising Design',
                    'desc_ar' => 'تصميمات مميزة تناسب نشاطك التجاري وهويتك البصرية.',
                    'desc_en' => 'Creative promotional designs matching your brand identity.',
                ],
                [
                    'icon' => '🏷️',
                    'title_ar' => 'ستيكرات ومطبوعات',
                    'title_en' => 'Stickers & Prints',
                    'desc_ar' => 'تنفيذ مطبوعات متنوعة بجودة ممتازة وتشطيب نظيف.',
                    'desc_en' => 'High-quality stickers and print materials with clean finishing.',
                ],
                [
                    'icon' => '🎁',
                    'title_ar' => 'هدايا دعائية',
                    'title_en' => 'Promotional Gifts',
                    'desc_ar' => 'تنفيذ هدايا دعائية مخصصة للشركات والمناسبات.',
                    'desc_en' => 'Custom promotional gifts for businesses and events.',
                ],
            ],
        ];
    }

    public function home(): View
    {
        return view('front.home', $this->sharedData());
    }

    public function about(): View
    {
        return view('front.about', $this->sharedData());
    }

    public function services(): View
    {
        return view('front.services', $this->sharedData());
    }

    public function portfolio(): View
    {
        return view('front.portfolio', $this->sharedData());
    }

    public function contact(): View
    {
        return view('front.contact', $this->sharedData());
    }
}