<?php
require __DIR__ . '/../includes/site-data.php';

$service = dzvisual_service_by_slug($services, $serviceSlug ?? '');

if ($service === null) {
    http_response_code(404);
    exit('Service not found.');
}

$assetBase = '../../';
$canonicalUrl = $siteUrl . $service['url'];
$pageDescription = $service['hero'];
$pageImage = $siteUrl . $service['image'];
$whatsappFallbackUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode($whatsappMessage . $canonicalUrl);
$relatedServices = array_filter($services, function ($item) use ($service) {
    return $item['slug'] !== $service['slug'];
});

$structuredData = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    '@id' => $canonicalUrl . '#service',
    'name' => $service['pageTitle'],
    'description' => $pageDescription,
    'provider' => [
        '@type' => 'LocalBusiness',
        'name' => $brand['name'],
        'url' => $siteUrl,
        'telephone' => $brand['phone'],
        'email' => $brand['email'],
    ],
    'areaServed' => [
        '@type' => 'Country',
        'name' => $brand['location'],
    ],
    'url' => $canonicalUrl,
    'image' => $pageImage,
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="robots" content="index, follow">
    <title><?php echo htmlspecialchars($service['pageTitle']); ?> | <?php echo htmlspecialchars($brand['name']); ?></title>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($brand['name']); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($service['pageTitle']); ?> | <?php echo htmlspecialchars($brand['name']); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($pageImage); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($service['pageTitle']); ?> | <?php echo htmlspecialchars($brand['name']); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($pageImage); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="<?php echo $assetBase; ?>assets/img/dzvisual-logo-live.png">
    <link href="<?php echo $assetBase; ?>assets/css/style.css" rel="stylesheet">
    <script type="application/ld+json">
        <?php echo json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="<?php echo $assetBase; ?>">
                <img class="brand-logo" src="<?php echo $assetBase; ?>assets/img/dzvisual-logo-live.png" alt="<?php echo htmlspecialchars($brand['name']); ?>">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="<?php echo $assetBase; ?>#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $assetBase; ?>#solutions">Solutions</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $assetBase; ?>#work">Proof</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $assetBase; ?>#process">Process</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $assetBase; ?>#contact">Contact</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-orange js-whatsapp-link" href="<?php echo htmlspecialchars($whatsappFallbackUrl); ?>" target="_blank" rel="noopener" data-wa-number="<?php echo htmlspecialchars($whatsappNumber); ?>" data-wa-message="<?php echo htmlspecialchars($whatsappMessage); ?>"><i class="bi bi-whatsapp"></i> WhatsApp</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="service-hero section-pad">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <span class="eyebrow"><?php echo htmlspecialchars($service['title']); ?></span>
                        <h1 class="display-5 fw-bold mt-3 mb-4"><?php echo htmlspecialchars($service['pageTitle']); ?></h1>
                        <p class="lead text-secondary mb-4"><?php echo htmlspecialchars($service['hero']); ?></p>
                        <div class="d-flex flex-wrap gap-3">
                            <a class="btn btn-orange btn-lg js-whatsapp-link" href="<?php echo htmlspecialchars($whatsappFallbackUrl); ?>" target="_blank" rel="noopener" data-wa-number="<?php echo htmlspecialchars($whatsappNumber); ?>" data-wa-message="<?php echo htmlspecialchars($whatsappMessage); ?>">Discuss this service</a>
                            <a class="btn btn-outline-orange btn-lg" href="<?php echo $assetBase; ?>#services">View all services</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-media">
                            <img src="<?php echo $assetBase . htmlspecialchars($service['image']); ?>" alt="<?php echo htmlspecialchars($service['pageTitle']); ?>" class="img-fluid" width="800" height="492">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-pad">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <span class="eyebrow">What is included</span>
                        <h2 class="section-title">Focused support from planning to handover.</h2>
                        <div class="service-detail-list mt-4">
                            <?php foreach ($service['deliverables'] as $deliverable): ?>
                                <div class="service-detail-item">
                                    <i class="bi bi-check2-circle" aria-hidden="true"></i>
                                    <span><?php echo htmlspecialchars($deliverable); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <aside class="service-side-panel">
                            <span class="eyebrow">Best for</span>
                            <ul>
                                <?php foreach ($service['bestFor'] as $item): ?>
                                    <li><?php echo htmlspecialchars($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </section>

        <?php if (!empty($service['projects'])): ?>
            <section class="section-pad bg-soft">
                <div class="container">
                    <div class="section-heading">
                        <span class="eyebrow">Website projects</span>
                        <h2>Selected website and programming work.</h2>
                    </div>
                    <div class="row g-4">
                        <?php foreach ($service['projects'] as $project): ?>
                            <div class="col-md-6 col-xl-3">
                                <article class="work-card h-100">
                                    <a href="<?php echo htmlspecialchars($project['url']); ?>" target="_blank" rel="noopener">
                                        <img src="<?php echo $assetBase . htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['label']); ?>" width="640" height="360">
                                        <div class="work-card-body">
                                            <span><?php echo htmlspecialchars($project['category']); ?></span>
                                            <h3><?php echo htmlspecialchars($project['label']); ?></h3>
                                            <p><?php echo htmlspecialchars($project['copy']); ?></p>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if (!empty($service['packages'])): ?>
            <section class="section-pad">
                <div class="container">
                    <div class="section-heading">
                        <span class="eyebrow">Service packages</span>
                        <h2>Website packages with practical starting prices.</h2>
                    </div>
                    <div class="row g-4">
                        <?php foreach ($service['packages'] as $package): ?>
                            <div class="col-md-6 col-xl-4">
                                <article class="package-card h-100">
                                    <div>
                                        <span><?php echo htmlspecialchars($package['name']); ?></span>
                                        <strong>From <?php echo htmlspecialchars($package['price']); ?></strong>
                                        <p><?php echo htmlspecialchars($package['summary']); ?></p>
                                    </div>
                                    <ul>
                                        <?php foreach ($package['features'] as $feature): ?>
                                            <li><?php echo htmlspecialchars($feature); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <a class="btn btn-outline-orange js-whatsapp-link" href="<?php echo htmlspecialchars($whatsappFallbackUrl); ?>" target="_blank" rel="noopener" data-wa-number="<?php echo htmlspecialchars($whatsappNumber); ?>" data-wa-message="<?php echo htmlspecialchars($whatsappMessage . 'Website package - ' . $package['name'] . ': '); ?>">Enquire package</a>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <section class="section-pad bg-soft">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">Related services</span>
                    <h2>Combine this with the right support around it.</h2>
                </div>
                <div class="row g-4">
                    <?php foreach ($relatedServices as $related): ?>
                        <div class="col-md-4">
                            <article class="service-card h-100">
                                <i class="bi <?php echo htmlspecialchars($related['icon']); ?>"></i>
                                <h3><?php echo htmlspecialchars($related['title']); ?></h3>
                                <p><?php echo htmlspecialchars($related['copy']); ?></p>
                                <a class="service-card-link" href="<?php echo $assetBase . htmlspecialchars($related['url']); ?>">View service</a>
                            </article>
                        </div>
                    <?php endforeach; ?>
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
