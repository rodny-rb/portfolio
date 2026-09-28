<?php
$name = "Rodny R.B.";
$title = "Full-Stack Developer & UI Enthusiast";
$tagline = "I design and build clean, fast, and memorable digital experiences.";
$bio = "I turn ideas into polished products with a focus on thoughtful interfaces, strong UX, and reliable code.";

$stats = [
    ["value" => "5+", "label" => "Years Experience"],
    ["value" => "18", "label" => "Projects Delivered"],
    ["value" => "99%", "label" => "Client Satisfaction"],
];

$skills = [
    "PHP", "JavaScript", "React", "Node.js", "MySQL", "UI/UX", "CSS3", "Responsive Design", "REST APIs", "Git"
];

$projects = [
    [
        "title" => "Nova Commerce",
        "description" => "A modern e-commerce storefront focused on conversion, speed, and clean product storytelling.",
        "stack" => ["PHP", "MySQL", "JavaScript"],
        "link" => "#"
    ],
    [
        "title" => "Flow Studio",
        "description" => "A creative portfolio and case-study platform for designers and agencies seeking premium presentation.",
        "stack" => ["React", "Node.js", "CSS"],
        "link" => "#"
    ],
    [
        "title" => "Pulse Analytics",
        "description" => "A dashboard that transforms raw data into actionable insights for teams and stakeholders.",
        "stack" => ["PHP", "Chart.js", "API"],
        "link" => "#"
    ]
];

$journey = [
    ["year" => "2024", "title" => "Senior Frontend Engineer", "text" => "Leading the design and implementation of premium user experiences across digital products."],
    ["year" => "2022", "title" => "Product Developer", "text" => "Built scalable interfaces and internal tools for growing businesses and startup teams."],
    ["year" => "2020", "title" => "Web Developer", "text" => "Started building websites and applications with a focus on performance and accessibility."],
];

$contactLinks = [
    ["label" => "Email", "value" => "hello@rodny.dev", "href" => "mailto:hello@rodny.dev"],
    ["label" => "LinkedIn", "value" => "linkedin.com/in/rodny", "href" => "https://linkedin.com"],
    ["label" => "GitHub", "value" => "github.com/rodny-rb", "href" => "https://github.com/rodny-rb"]
];

$currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Portfolio page for <?php echo htmlspecialchars($name); ?>" />
    <title><?php echo htmlspecialchars($name); ?> | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <div class="page-shell">
        <header class="site-header">
            <nav class="nav container">
                <a href="#top" class="brand">
                    <span class="brand-mark">R</span>
                    <span><?php echo htmlspecialchars($name); ?></span>
                </a>

                <button class="nav-toggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="nav-links">
                    <a href="#about">About</a>
                    <a href="#skills">Skills</a>
                    <a href="#work">Work</a>
                    <a href="#experience">Experience</a>
                    <a href="#contact">Contact</a>
                </div>
            </nav>
        </header>

        <main id="top">
            <section class="hero container reveal">
                <div class="hero-copy">
                    <p class="eyebrow">Available for freelance projects</p>
                    <h1>
                        I build <span>smooth digital experiences</span>
                        that look premium and work beautifully.
                    </h1>
                    <p class="lead"><?php echo htmlspecialchars($tagline); ?></p>
                    <div class="cta-row">
                        <a href="#work" class="btn btn-primary">View my work</a>
                        <a href="#contact" class="btn btn-secondary">Let's talk</a>
                    </div>
                    <ul class="mini-stats">
                        <?php foreach ($stats as $stat): ?>
                            <li>
                                <strong><?php echo htmlspecialchars($stat["value"]); ?></strong>
                                <span><?php echo htmlspecialchars($stat["label"]); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="hero-visual" aria-label="Profile summary card">
                    <div class="profile-card">
                        <div class="avatar-wrap">
                            <div class="avatar">RR</div>
                        </div>
                        <div class="profile-body">
                            <p class="profile-role"><?php echo htmlspecialchars($title); ?></p>
                            <h2><?php echo htmlspecialchars($name); ?></h2>
                            <p><?php echo htmlspecialchars($bio); ?></p>
                        </div>
                        <div class="profile-meta">
                            <span>Based in Nairobi</span>
                            <span>Open to remote work</span>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about" class="about container reveal">
                <div class="section-heading">
                    <p class="eyebrow">About</p>
                    <h2>Designing interfaces that feel effortless.</h2>
                </div>

                <div class="about-grid">
                    <div class="about-card">
                        <p>
                            I help founders and brands turn complex ideas into intuitive digital products. My approach blends strategy,
                            interface design, and development so every experience feels polished from the first click to the final conversion.
                        </p>
                    </div>
                    <div class="about-card muted">
                        <p>
                            I focus on clarity, motion, performance, and maintainability — because beautiful design only matters when it feels smooth and reliable in real life.
                        </p>
                    </div>
                </div>
            </section>

            <section id="skills" class="skills container reveal">
                <div class="section-heading">
                    <p class="eyebrow">Skills</p>
                    <h2>Tools and strengths I bring to a product.</h2>
                </div>

                <div class="skill-list">
                    <?php foreach ($skills as $skill): ?>
                        <span class="skill-pill"><?php echo htmlspecialchars($skill); ?></span>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="work" class="work container reveal">
                <div class="section-heading">
                    <p class="eyebrow">Selected work</p>
                    <h2>Recent projects built around clarity and impact.</h2>
                </div>

                <div class="project-grid">
                    <?php foreach ($projects as $project): ?>
                        <article class="project-card">
                            <div class="project-top">
                                <span class="project-badge">Featured</span>
                            </div>
                            <h3><?php echo htmlspecialchars($project["title"]); ?></h3>
                            <p><?php echo htmlspecialchars($project["description"]); ?></p>
                            <div class="project-tags">
                                <?php foreach ($project["stack"] as $tag): ?>
                                    <span><?php echo htmlspecialchars($tag); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <a href="<?php echo htmlspecialchars($project["link"]); ?>" class="inline-link">View project</a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="experience" class="experience container reveal">
                <div class="section-heading">
                    <p class="eyebrow">Experience</p>
                    <h2>My path from learning to building.</h2>
                </div>

                <div class="timeline">
                    <?php foreach ($journey as $item): ?>
                        <div class="timeline-item">
                            <div class="timeline-year"><?php echo htmlspecialchars($item["year"]); ?></div>
                            <div class="timeline-content">
                                <h3><?php echo htmlspecialchars($item["title"]); ?></h3>
                                <p><?php echo htmlspecialchars($item["text"]); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </main>

        <footer id="contact" class="site-footer reveal">
            <div class="container footer-wrap">
                <div>
                    <p class="eyebrow">Contact</p>
                    <h2>Let's build something memorable.</h2>
                </div>
                <div class="contact-links">
                    <?php foreach ($contactLinks as $link): ?>
                        <a href="<?php echo htmlspecialchars($link["href"]); ?>" target="_blank" rel="noreferrer">
                            <?php echo htmlspecialchars($link["label"]); ?>
                            <span><?php echo htmlspecialchars($link["value"]); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
                <p class="copyright">© <?php echo htmlspecialchars($currentYear); ?> <?php echo htmlspecialchars($name); ?>. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script src="script.js"></script>
</body>
</html>
