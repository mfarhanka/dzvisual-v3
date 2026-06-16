<?php
require __DIR__ . '/includes/site-data.php';

$structuredData = [
    '@context' => 'https://schema.org',
    '@type' => ['Organization', 'LocalBusiness'],
    '@id' => $siteUrl . '#organization',
    'name' => $brand['name'],
    'url' => $siteUrl,
    'logo' => $siteUrl . 'assets/img/dzvisual-logo-live.png',
    'image' => $siteImage,
    'description' => $siteDescription,
    'email' => $brand['email'],
    'telephone' => $brand['phone'],
    'areaServed' => [
        '@type' => 'Country',
        'name' => $brand['location'],
    ],
    'sameAs' => [
        'https://wa.me/' . $whatsappNumber,
    ],
    'makesOffer' => array_map(function ($service) {
        return [
            '@type' => 'Offer',
            'itemOffered' => [
                '@type' => 'Service',
                'name' => $service['title'],
                'description' => $service['copy'],
            ],
        ];
    }, $services),
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo htmlspecialchars($siteDescription); ?>">
    <meta name="robots" content="index, follow">
    <title><?php echo htmlspecialchars($brand['name']); ?> | Website, Homestay, Ads & Visual Services Malaysia</title>
    <link rel="canonical" href="<?php echo htmlspecialchars($siteUrl); ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($brand['name']); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($brand['name']); ?> | Website, Homestay, Ads & Visual Services Malaysia">
    <meta property="og:description" content="<?php echo htmlspecialchars($siteDescription); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($siteUrl); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($siteImage); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($brand['name']); ?> | Website, Homestay, Ads & Visual Services Malaysia">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($siteDescription); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($siteImage); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="assets/img/dzvisual-logo-live.png">
    <link href="assets/css/style.css" rel="stylesheet">
    <script type="application/ld+json">
        <?php echo json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="#top">
                <img class="brand-logo" src="assets/img/dzvisual-logo-live.png" alt="<?php echo htmlspecialchars($brand['name']); ?>">
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
                            <img src="assets/img/dzvisual-web-design.png" alt="DzVisual Network website design and programming services" class="img-fluid" width="800" height="492">
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
                                <a class="service-card-link" href="<?php echo htmlspecialchars($service['url']); ?>">View service</a>
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
                        <div class="col-md-6 col-xl-3">
                            <article class="work-card">
                                <a href="<?php echo htmlspecialchars($item['url']); ?>" target="_blank" rel="noopener">
                                    <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['label']); ?> by DzVisual Network" width="1366" height="651">
                                    <div class="work-card-body">
                                        <span><?php echo htmlspecialchars($item['category']); ?></span>
                                        <h3><?php echo htmlspecialchars($item['label']); ?></h3>
                                        <p><?php echo htmlspecialchars($item['copy']); ?></p>
                                    </div>
                                </a>
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
