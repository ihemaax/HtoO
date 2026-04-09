<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    private function sharedData(): array
    {
        return [
            'siteName' => 'H to O | Print & Advertising That Sells',
            'whatsappNumber' => '201025006905',
            'logoUrl' => 'https://imgg.io/images/2026/04/05/68f1178fd72091a534dacdea6f2b7509.jpg',
            'works' => [
                [
                    'image' => 'https://imgg.io/images/2026/04/06/ebe97d2784bb673a12ca5430b1b354d6.jpg',
                    'title_ar' => 'باكدج هوية ودعاية لمشروع تجاري',
                    'title_en' => 'Full Branding & Print Package',
                ],
            ],
            'services' => [
                [
                    'icon' => '🖨️',
                    'title_ar' => 'طباعة أكواب دعائية',
                    'title_en' => 'Promotional Mug Printing',
                    'desc_ar' => 'أكواب بإخراج نظيف وثبات ألوان ممتاز لاسم البراند أو اللوجو.',
                    'desc_en' => 'High-quality mug branding with sharp details and color stability.',
                ],
                [
                    'icon' => '🖱️',
                    'title_ar' => 'طباعة بادات ماوس للشركات',
                    'title_en' => 'Corporate Mouse Pad Printing',
                    'desc_ar' => 'منتج عملي للمكاتب مع مساحة براند واضحة وتشطيب احترافي.',
                    'desc_en' => 'Office-ready mouse pads with clean branding and durable finish.',
                ],
                [
                    'icon' => '💳',
                    'title_ar' => 'كروت شخصية',
                    'title_en' => 'Business Cards',
                    'desc_ar' => 'كروت شخصية بتقسيم بصري نظيف يطلعك بصورة محترفة في أي مقابلة.',
                    'desc_en' => 'Professional business cards with clear layout and premium touch.',
                ],
                [
                    'icon' => '🎨',
                    'title_ar' => 'تصميم حملات دعائية',
                    'title_en' => 'Advertising Design',
                    'desc_ar' => 'تصميمات تسويقية مبنية على هدف الحملة وشريحة العملاء المستهدفة.',
                    'desc_en' => 'Campaign-focused creative designs aligned with your audience.',
                ],
                [
                    'icon' => '🏷️',
                    'title_ar' => 'ستيكرات ومطبوعات',
                    'title_en' => 'Stickers & Prints',
                    'desc_ar' => 'ستيكرات ومطبوعات بخامات عملية ودقة طباعة تخدم البيع اليومي.',
                    'desc_en' => 'Durable stickers and print materials with clean commercial finishing.',
                ],
                [
                    'icon' => '🎁',
                    'title_ar' => 'هدايا دعائية',
                    'title_en' => 'Promotional Gifts',
                    'desc_ar' => 'هدايا دعائية ترفع قيمة البراند في المعارض والاجتماعات والمناسبات.',
                    'desc_en' => 'Custom promotional gifts that elevate your brand at events.',
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