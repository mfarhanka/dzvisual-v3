<?php
$brand = [
    'name' => 'DzVisual Network',
    'tagline' => 'Digital, hospitality, advertising, and visual production services for growing local businesses.',
    'phone' => '+60 10-774 4530',
    'email' => 'hello@dzvisual.my',
    'location' => 'Malaysia',
];

$whatsappNumber = '60107744530';
$whatsappMessage = 'Hi DzVisual Network, I clicked WhatsApp from this page and would like to enquire: ';
$whatsappFallbackUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode($whatsappMessage . 'https://dzvisual.my/');

$services = [
    [
        'title' => 'Website Services',
        'icon' => 'bi-window-sidebar',
        'copy' => 'Business websites, landing pages, booking pages, profile pages, and maintenance support.',
        'points' => ['Website design', 'Landing pages', 'Monthly updates'],
    ],
    [
        'title' => 'Homestay Operator',
        'icon' => 'bi-house-heart',
        'copy' => 'Setup, presentation, guest communication, listing support, and content for homestay owners.',
        'points' => ['Listing setup', 'Guest workflow', 'Property content'],
    ],
    [
        'title' => 'Advertising Agency',
        'icon' => 'bi-badge-ad',
        'copy' => 'Campaign planning, ad creatives, lead generation funnels, and performance-focused promotions.',
        'points' => ['Meta ads', 'TikTok ads', 'Lead generation'],
    ],
    [
        'title' => 'Photo & Video',
        'icon' => 'bi-camera-reels',
        'copy' => 'Event coverage, commercial visuals, reels, product shoots, food content, and brand story films.',
        'points' => ['Event coverage', 'Commercial shoot', 'Social content'],
    ],
];

$portfolio = [
    ['label' => 'Business Launch Kit', 'category' => 'Website + Visuals', 'image' => 'assets/img/portfolio-event.svg'],
    ['label' => 'Cafe Growth Campaign', 'category' => 'Ads + Content', 'image' => 'assets/img/portfolio-food.svg'],
    ['label' => 'Stay Listing Upgrade', 'category' => 'Homestay Support', 'image' => 'assets/img/portfolio-wedding.svg'],
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
    ['value' => '120+', 'label' => 'Projects delivered'],
    ['value' => '4', 'label' => 'Service divisions'],
    ['value' => '48h', 'label' => 'First response target'],
];

$audiences = ['Homestay owners', 'Small businesses', 'Event organizers', 'Cafes and restaurants', 'Product sellers', 'Local brands'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DzVisual Network provides website services, homestay operator support, advertising, and visual production for businesses in Malaysia.">
    <title><?php echo htmlspecialchars($brand['name']); ?> | Website, Homestay, Ads & Visual Services Malaysia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="assets/img/dzvisual-logo.jpg">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="#top">
                <img class="brand-logo" src="assets/img/dzvisual-logo.jpg" alt="<?php echo htmlspecialchars($brand['name']); ?>">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#solutions">Solutions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#work">Proof</a></li>
                    <li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-orange js-whatsapp-link" href="<?php echo htmlspecialchars($whatsappFallbackUrl); ?>" target="_blank" rel="noopener" data-wa-number="<?php echo htmlspecialchars($whatsappNumber); ?>" data-wa-message="<?php echo htmlspecialchars($whatsappMessage); ?>"><i class="bi bi-whatsapp"></i> WhatsApp</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="top">
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <span class="eyebrow">Websites | Homestay | Ads | Visuals</span>
                        <h1 class="display-4 fw-bold mt-3 mb-4"><?php echo htmlspecialchars($brand['name']); ?></h1>
                        <p class="lead text-secondary mb-4"><?php echo htmlspecialchars($brand['tagline']); ?></p>
                        <div class="d-flex flex-wrap gap-3">
                            <a class="btn btn-orange btn-lg" href="#contact">Discuss your project</a>
                            <a class="btn btn-outline-orange btn-lg" href="#services">Explore services</a>
                        </div>
                        <div class="hero-service-strip" aria-label="Core services">
                            <?php foreach ($services as $service): ?>
                                <span><?php echo htmlspecialchars($service['title']); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-media">
                            <img src="assets/img/hero-studio.svg" alt="DzVisual Network production and business services" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="stats-band py-4">
            <div class="container">
                <div class="row g-3 text-center">
                    <?php foreach ($stats as $stat): ?>
                        <div class="col-md-4">
                            <strong><?php echo htmlspecialchars($stat['value']); ?></strong>
                            <span><?php echo htmlspecialchars($stat['label']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="services" class="section-pad">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">What we do</span>
                    <h2>One network for your digital presence, property, and marketing growth.</h2>
                </div>
                <div class="row g-4">
                    <?php foreach ($services as $service): ?>
                        <div class="col-md-6 col-xl-3">
                            <article class="service-card h-100">
                                <i class="bi <?php echo htmlspecialchars($service['icon']); ?>"></i>
                                <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                                <p><?php echo htmlspecialchars($service['copy']); ?></p>
                                <ul>
                                    <?php foreach ($service['points'] as $point): ?>
                                        <li><?php echo htmlspecialchars($point); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="solutions" class="section-pad bg-soft">
            <div class="container">
                <div class="row align-items-start g-5">
                    <div class="col-lg-5">
                        <span class="eyebrow">Business solutions</span>
                        <h2 class="section-title">Choose the outcome first. We combine the right services around it.</h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="solution-list">
                            <?php foreach ($solutions as $solution): ?>
                                <article class="solution-item">
                                    <h3><?php echo htmlspecialchars($solution['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($solution['copy']); ?></p>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="audience-panel">
                    <span>Who we help</span>
                    <div>
                        <?php foreach ($audiences as $audience): ?>
                            <em><?php echo htmlspecialchars($audience); ?></em>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="work" class="section-pad">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">Proof of work</span>
                    <h2>Practical support across launch, promotion, and presentation.</h2>
                </div>
                <div class="row g-4">
                    <?php foreach ($portfolio as $item): ?>
                        <div class="col-md-4">
                            <article class="work-card">
                                <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['label']); ?>">
                                <div class="work-card-body">
                                    <span><?php echo htmlspecialchars($item['category']); ?></span>
                                    <h3><?php echo htmlspecialchars($item['label']); ?></h3>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="process" class="section-pad">
            <div class="container">
                <div class="row align-items-start g-5">
                    <div class="col-lg-5">
                        <span class="eyebrow">How it works</span>
                        <h2 class="section-title">A clear workflow from first enquiry to launch.</h2>
                        <p class="text-secondary">Every project is planned around the business outcome, so design, content, ads, and operations stay aligned from day one.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="process-list">
                            <?php $step = 1; ?>
                            <?php foreach ($process as $title => $copy): ?>
                                <div class="process-item">
                                    <span><?php echo str_pad((string) $step, 2, '0', STR_PAD_LEFT); ?></span>
                                    <div>
                                        <h3><?php echo htmlspecialchars($title); ?></h3>
                                        <p><?php echo htmlspecialchars($copy); ?></p>
                                    </div>
                                </div>
                                <?php $step++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-section section-pad">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <span class="eyebrow">Let's talk</span>
                        <h2>Tell us what you want to improve.</h2>
                        <p>Share your business type, location, current challenge, and preferred service. DzVisual Network will help shape the right plan.</p>
                    </div>
                    <div class="col-lg-6">
                        <form class="contact-form" action="mailto:<?php echo htmlspecialchars($brand['email']); ?>" method="post" enctype="text/plain">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control" id="name" name="name" type="text" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input class="form-control" id="phone" name="phone" type="tel" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="service">Service needed</label>
                                    <select class="form-select" id="service" name="service">
                                        <?php foreach ($services as $service): ?>
                                            <option><?php echo htmlspecialchars($service['title']); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-orange w-100" type="submit">Send inquiry</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-4 bg-white border-top">
        <div class="container d-flex flex-column flex-md-row justify-content-between gap-3">
            <span>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($brand['name']); ?>. All rights reserved.</span>
            <span><?php echo htmlspecialchars($brand['email']); ?> | <?php echo htmlspecialchars($brand['location']); ?></span>
        </div>
    </footer>

    <a class="floating-whatsapp js-whatsapp-link" href="<?php echo htmlspecialchars($whatsappFallbackUrl); ?>" target="_blank" rel="noopener" aria-label="Chat with DzVisual Network on WhatsApp" data-wa-number="<?php echo htmlspecialchars($whatsappNumber); ?>" data-wa-message="<?php echo htmlspecialchars($whatsappMessage); ?>">
        <i class="bi bi-whatsapp" aria-hidden="true"></i>
        <span>WhatsApp</span>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.js-whatsapp-link').forEach(function (link) {
            var sourceUrl = window.location.href;
            var message = link.dataset.waMessage + sourceUrl;
            link.href = 'https://wa.me/' + link.dataset.waNumber + '?text=' + encodeURIComponent(message);
        });
    </script>
</body>
</html>
