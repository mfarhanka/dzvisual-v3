<?php
$brand = [
    'name' => 'DzVisual Network',
    'tagline' => 'Website design, programming, hospitality, advertising, and visual production services for growing local businesses.',
    'phone' => '+60 10-774 4530',
    'email' => 'hello@dzvisual.my',
    'location' => 'Malaysia',
];

$whatsappNumber = '60107744530';
$whatsappMessage = 'Hi DzVisual Network, I clicked WhatsApp from this page and would like to enquire: ';
$siteUrl = 'https://dzvisual.my/';
$siteDescription = 'DzVisual Network provides website design, programming, homestay operator support, advertising, and visual production for businesses in Malaysia.';
$siteImage = $siteUrl . 'assets/img/dzvisual-og.jpg';
$whatsappFallbackUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode($whatsappMessage . $siteUrl);

$services = [
    [
        'slug' => 'website-design',
        'url' => 'services/website-design/',
        'title' => 'Website Services',
        'pageTitle' => 'Website Design & Programming Services Malaysia',
        'icon' => 'bi-window-sidebar',
        'copy' => 'Web design, web development, enquiry forms, galleries, product modules, order modules, and maintenance support.',
        'hero' => 'Practical websites for businesses that need a stronger online presence, clearer enquiries, and custom features that match their workflow.',
        'points' => ['Website design', 'Online enquiry', 'Custom modules'],
        'deliverables' => ['Responsive website design', 'Business profile and service pages', 'Enquiry forms and WhatsApp flows', 'Gallery, product, or order modules', 'Maintenance and content updates'],
        'bestFor' => ['Small business websites', 'Company profiles', 'Homestay websites', 'Product and service catalogues'],
        'image' => 'assets/img/dzvisual-web-design.png',
        'packages' => [
            [
                'name' => 'Starter Website',
                'price' => 'RM 1,500',
                'summary' => 'A focused online presence for new businesses that need a clean profile and enquiry path.',
                'features' => ['Up to 5 pages', 'Mobile responsive layout', 'WhatsApp enquiry button', 'Basic SEO setup'],
            ],
            [
                'name' => 'Business Website',
                'price' => 'RM 2,800',
                'summary' => 'A stronger company website with clearer service pages, proof sections, and lead capture.',
                'features' => ['Up to 10 pages', 'Service and portfolio sections', 'Enquiry form integration', 'Content update support'],
            ],
            [
                'name' => 'Custom System',
                'price' => 'RM 4,500+',
                'summary' => 'Custom modules for businesses that need product, booking, ordering, or internal workflows.',
                'features' => ['Custom feature planning', 'Product, gallery, or order module', 'Admin management flow', 'Launch and handover support'],
            ],
        ],
        'projects' => [
            [
                'label' => 'Website Homestay',
                'category' => 'Homestay Website',
                'copy' => 'Booking-focused homestay website project in Cyberjaya.',
                'image' => 'assets/img/project-homestay.jpg',
                'url' => 'http://homestay.dzvisual.my/',
            ],
            [
                'label' => 'Website for FTSDeaf',
                'category' => 'Association Website',
                'copy' => 'Federal Territory Sport Deaf Association website.',
                'image' => 'assets/img/project-ftsdeaf.jpg',
                'url' => 'http://ftsdeaf.org.my/',
            ],
            [
                'label' => 'Website Coconet',
                'category' => 'Company Profile',
                'copy' => 'Company profile website design project.',
                'image' => 'assets/img/project-coconet.jpg',
                'url' => 'http://www.coconet.com.my/',
            ],
            [
                'label' => 'App e-kupon',
                'category' => 'Programming',
                'copy' => 'Custom e-kupon application programming project.',
                'image' => 'assets/img/project-ekupon.jpg',
                'url' => 'https://play.google.com/store/apps/details?id=com.vnet.ekupon01',
            ],
        ],
    ],
    [
        'slug' => 'homestay-management',
        'url' => 'services/homestay-management/',
        'title' => 'Homestay Operator',
        'pageTitle' => 'Homestay Management & Operator Support Malaysia',
        'icon' => 'bi-house-heart',
        'copy' => 'Setup, presentation, guest communication, listing support, and content for homestay owners.',
        'hero' => 'Support for homestay owners who want sharper presentation, smoother guest handling, and stronger booking confidence.',
        'points' => ['Listing setup', 'Guest workflow', 'Property content'],
        'deliverables' => ['Property presentation review', 'Listing content and image guidance', 'Guest communication workflow', 'House rules and check-in support', 'Promotion assets for online channels'],
        'bestFor' => ['New homestay owners', 'Existing listings needing improvement', 'Short-stay property promotion', 'Owners who need operational structure'],
        'image' => 'assets/img/dzvisual-services.png',
    ],
    [
        'slug' => 'advertising',
        'url' => 'services/advertising/',
        'title' => 'Advertising Agency',
        'pageTitle' => 'Advertising, Lead Generation & Campaign Services Malaysia',
        'icon' => 'bi-badge-ad',
        'copy' => 'Campaign planning, ad creatives, lead generation funnels, and performance-focused promotions.',
        'hero' => 'Advertising support for businesses that need clearer offers, better campaign assets, and more focused lead generation.',
        'points' => ['Meta ads', 'TikTok ads', 'Lead generation'],
        'deliverables' => ['Campaign planning', 'Ad creative direction', 'Meta and TikTok ad setup support', 'Landing page and enquiry flow guidance', 'Performance review and improvement ideas'],
        'bestFor' => ['Local promotions', 'Lead generation campaigns', 'Product launches', 'Homestay and event marketing'],
        'image' => 'assets/img/dzvisual-services.png',
    ],
    [
        'slug' => 'visual-production',
        'url' => 'services/visual-production/',
        'title' => 'Photo & Video',
        'pageTitle' => 'Photo, Video & Visual Production Services Malaysia',
        'icon' => 'bi-camera-reels',
        'copy' => 'Event coverage, commercial visuals, reels, product shoots, food content, and brand story films.',
        'hero' => 'Photo and video production for brands, venues, events, food, products, and social media campaigns.',
        'points' => ['Event coverage', 'Commercial shoot', 'Social content'],
        'deliverables' => ['Event photo and video coverage', 'Commercial product visuals', 'Food and venue content', 'Short-form reels and social clips', 'Brand story visual assets'],
        'bestFor' => ['Events', 'Restaurants and cafes', 'Products and ecommerce', 'Social media campaigns'],
        'image' => 'assets/img/dzvisual-services.png',
    ],
];

$portfolio = [
    [
        'label' => 'Website Homestay',
        'category' => 'Web Design',
        'copy' => 'Website homestay project in Cyberjaya.',
        'image' => 'assets/img/project-homestay.jpg',
        'url' => 'http://homestay.dzvisual.my/',
    ],
    [
        'label' => 'Website for FTSDeaf',
        'category' => 'Web Design',
        'copy' => 'Federal Territory Sport Deaf Association website.',
        'image' => 'assets/img/project-ftsdeaf.jpg',
        'url' => 'http://ftsdeaf.org.my/',
    ],
    [
        'label' => 'Website Coconet',
        'category' => 'Company Profile',
        'copy' => 'Company profile website design project.',
        'image' => 'assets/img/project-coconet.jpg',
        'url' => 'http://www.coconet.com.my/',
    ],
    [
        'label' => 'App e-kupon',
        'category' => 'Programming',
        'copy' => 'E-kupon application project.',
        'image' => 'assets/img/project-ekupon.jpg',
        'url' => 'https://play.google.com/store/apps/details?id=com.vnet.ekupon01',
    ],
];

$solutions = [
    [
        'title' => 'Launch My Business Online',
        'copy' => 'Website, business profile, visuals, and enquiry flow for a cleaner first impression.',
    ],
    [
        'title' => 'Promote My Homestay',
        'copy' => 'Property content, listing improvement, guest journey, and booking-focused promotion.',
    ],
    [
        'title' => 'Monthly Content & Ads',
        'copy' => 'Creative production and paid promotion support for consistent online visibility.',
    ],
];

$process = [
    'Consult' => 'We clarify your business goal, current assets, timeline, and the service mix you need.',
    'Plan' => 'We map the website, content, ads, or homestay workflow into a practical action plan.',
    'Build' => 'Our team produces the visuals, pages, listings, campaigns, and supporting materials.',
    'Launch' => 'You receive ready-to-use files, pages, campaign assets, or operational handover support.',
];

$stats = [
    ['value' => '50+', 'label' => 'Completed website design & programming projects'],
    ['value' => '4', 'label' => 'Service divisions'],
    ['value' => '10+', 'label' => 'Years of experience'],
];

$audiences = ['Homestay owners', 'Small businesses', 'Event organizers', 'Cafes and restaurants', 'Product sellers', 'Local brands'];

function dzvisual_service_by_slug(array $services, string $slug): ?array
{
    foreach ($services as $service) {
        if ($service['slug'] === $slug) {
            return $service;
        }
    }

    return null;
}
