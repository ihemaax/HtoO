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
                    'image' => 'https://imgg.io/images/2026/04/06/ebe97d2784bb673a12ca5430b1b354d6.jpg',
                    'title_ar' => 'نموذج شغل',
                    'title_en' => 'Featured Creative Work',
                ],
            ],
            'services' => [
                [
                    'icon' => '🖨️',
                    'title_ar' => 'طباعة كوب',
                    'title_en' => 'Mug Printing',
                    'desc_ar' => 'طباعة على الكوب باسمك أو لوجو النشاط بجودة واضحة.',
                    'desc_en' => 'Professional mug printing with premium quality and vivid colors.',
                ],
                [
                    'icon' => '🖱️',
                    'title_ar' => 'طباعة بادة ماوس',
                    'title_en' => 'Mouse Pad Printing',
                    'desc_ar' => 'بادة ماوس بتصميم مناسب للشركات والمكاتب.',
                    'desc_en' => 'Custom mouse pad printing for businesses and individuals.',
                ],
                [
                    'icon' => '💳',
                    'title_ar' => 'كروت شخصية',
                    'title_en' => 'Business Cards',
                    'desc_ar' => 'تصميم وطباعة كارت شخصي بشكل واضح وسهل القراءة.',
                    'desc_en' => 'Elegant and professional business card design and printing.',
                ],
                [
                    'icon' => '🎨',
                    'title_ar' => 'تصميمات دعائية',
                    'title_en' => 'Advertising Design',
                    'desc_ar' => 'تصميمات دعاية مناسبة لنوع شغلك والسوق اللي بتستهدفه.',
                    'desc_en' => 'Creative promotional designs matching your brand identity.',
                ],
                [
                    'icon' => '🏷️',
                    'title_ar' => 'ستيكرات ومطبوعات',
                    'title_en' => 'Stickers & Prints',
                    'desc_ar' => 'مطبوعات وستيكرات بخامات كويسة وتفاصيل واضحة.',
                    'desc_en' => 'High-quality stickers and print materials with clean finishing.',
                ],
                [
                    'icon' => '🎁',
                    'title_ar' => 'هدايا دعائية',
                    'title_en' => 'Promotional Gifts',
                    'desc_ar' => 'هدايا دعائية باسم شركتك للمناسبات والتسويق.',
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