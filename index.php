<?php
$brand = [
    'name' => 'DzVisual Network',
    'tagline' => 'Visual production for brands, events, and stories that need to be remembered.',
    'phone' => '+60 12-345 6789',
    'email' => 'hello@dzvisual.my',
    'location' => 'Malaysia',
];

$services = [
    [
        'title' => 'Event Coverage',
        'icon' => 'bi-camera-reels',
        'copy' => 'Photo and video coverage for weddings, corporate events, launches, and private celebrations.',
    ],
    [
        'title' => 'Commercial Visuals',
        'icon' => 'bi-badge-ad',
        'copy' => 'Product, food, lifestyle, and campaign visuals shaped for websites, social media, and ads.',
    ],
    [
        'title' => 'Social Content',
        'icon' => 'bi-phone',
        'copy' => 'Short-form reels, highlight edits, and monthly content support for growing digital channels.',
    ],
    [
        'title' => 'Brand Story Films',
        'icon' => 'bi-play-btn',
        'copy' => 'Narrative-driven videos that introduce your people, process, space, and customer experience.',
    ],
];

$portfolio = [
    ['label' => 'Corporate Launch', 'category' => 'Event Film', 'image' => 'assets/img/portfolio-event.svg'],
    ['label' => 'Cafe Campaign', 'category' => 'Commercial Shoot', 'image' => 'assets/img/portfolio-food.svg'],
    ['label' => 'Wedding Highlight', 'category' => 'Cinematic Video', 'image' => 'assets/img/portfolio-wedding.svg'],
];

$process = [
    'Discovery' => 'We clarify your goals, audience, style direction, and timeline.',
    'Production' => 'Our crew handles the shoot with a clear shot list and calm on-site coordination.',
    'Editing' => 'We refine color, pacing, sound, captions, and final formats for each platform.',
    'Delivery' => 'You receive polished files ready for web, social, presentation, or archive use.',
];

$stats = [
    ['value' => '120+', 'label' => 'Projects delivered'],
    ['value' => '8+', 'label' => 'Creative services'],
    ['value' => '48h', 'label' => 'Preview turnaround'],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DzVisual Network creates photography, videography, and social content for events, brands, and businesses in Malaysia.">
    <title><?php echo htmlspecialchars($brand['name']); ?> | Photo & Video Production Malaysia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="#top">
                <span class="brand-mark">DZ</span>
                <span><?php echo htmlspecialchars($brand['name']); ?></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#work">Work</a></li>
                    <li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-orange" href="https://wa.me/60123456789"><i class="bi bi-whatsapp"></i> WhatsApp</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="top">
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <span class="eyebrow">Photo · Video · Content</span>
                        <h1 class="display-4 fw-bold mt-3 mb-4"><?php echo htmlspecialchars($brand['name']); ?></h1>
                        <p class="lead text-secondary mb-4"><?php echo htmlspecialchars($brand['tagline']); ?></p>
                        <div class="d-flex flex-wrap gap-3">
                            <a class="btn btn-orange btn-lg" href="#contact">Start a project</a>
                            <a class="btn btn-outline-orange btn-lg" href="#work">View work</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-media">
                            <img src="assets/img/hero-studio.svg" alt="DzVisual Network production setup" class="img-fluid">
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
                    <h2>Focused visual services for modern businesses.</h2>
                </div>
                <div class="row g-4">
                    <?php foreach ($services as $service): ?>
                        <div class="col-md-6 col-xl-3">
                            <article class="service-card h-100">
                                <i class="bi <?php echo htmlspecialchars($service['icon']); ?>"></i>
                                <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                                <p><?php echo htmlspecialchars($service['copy']); ?></p>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="work" class="section-pad bg-soft">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">Selected work</span>
                    <h2>Clean, warm, high-impact visuals.</h2>
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
                        <h2 class="section-title">A clear workflow from brief to final delivery.</h2>
                        <p class="text-secondary">Every project is planned around the final use, so the shoot, edit, and delivery format stay aligned from day one.</p>
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
                        <span class="eyebrow">Let’s create</span>
                        <h2>Tell us what you need captured.</h2>
                        <p>Share your date, location, deliverables, and reference style. DzVisual Network will help shape the right production plan.</p>
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
                                    <label class="form-label" for="service">Project type</label>
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
            <span><?php echo htmlspecialchars($brand['email']); ?> · <?php echo htmlspecialchars($brand['location']); ?></span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
