<?php
$projects = [
  [
    'title' => 'iKnow Academic Hub Website',
    'description' => "<ul><li>Design and develop the marketing website to improve branding, SEO, and enrollment conversions.</li><li>Built a custom WordPress theme using ACF, PHP, SASS, JavaScript, and GSAP for a smoother, modern user experience.</li><li>Improved site speed through asset optimization, lazy loading, and minified scripts/styles.</li><li>Integrated form handling and analytics tracking to support marketing and lead-generation campaigns.</li></ul>",
    'tools' => ['Wordpress', 'SASS', 'JavaScript', 'PHP', 'Advance Custom Fields', 'Site SEO', 'Figma', 'Canva', 'GSAP', 'Git'],
    'link' => 'https://www.iknowacademichub.com',
    'image' => '/src/images/projects/iknow.png',
  ],
  [
    'title' => 'iKnow Academic Hub Web Application',
    'description' => "<ul><li>Served as Lead Developer, building a custom LMS using React.js, TypeScript, Tailwind, and GSAP for smooth user experience and responsive UI.</li><li>Developed major LMS features including quizzes, timers, scoring, session tracking, learning modules, dashboards, and video lessons.</li><li>Integrated and optimized REST APIs (Node.js + MySQL), improving performance through pagination, reduced payloads, and component refactoring.</li><li>Led a junior developer, managing Git workflow, documentation, and deployment setup for scalable long-term maintenance.</li></ul>",
    'tools' => ['React.js', 'TypeScript', 'Tailwind CSS', 'GSAP', 'Node.js', 'MySQL', 'REST APIs', 'Git', 'Vite', 'Web Socket'],
    'link' => 'https://study.iknowacademichub.com',
    'image' => '/src/images/projects/iknow-app.png',
  ],
  [
    'title' => 'GII International WordPress Website',
    'description' => "<ul><li>Designed the client website using Figma.</li><li>Built custom UI sections and animations, ensuring consistent branding and smooth user experience.</li><li>Implemented SASS-based styling, optimized layouts, and improved page responsiveness across devices.</li><li>Enhanced performance through asset optimization, reusable components, and mobile usability improvements.</li><li>Integrated SEO-friendly structures and assisted with bug fixes and front-end performance tuning.</li></ul>",
    'tools' => ['Wordpress', 'Custom Theme', 'TailwindCSS', 'Photoshop'],
    'link' => 'https://giifreight.net/',
    'image' => '/src/images/projects/gii.png',
  ],
  [
    'title' => 'Converter',
    'description' => '<ul><li>First personal project app using Flutter made from scratch. The app is for the common unit convertions.</li><li>Composes of one screen as selection screen, and a reusable screen as the converter screen.</li></ul>',
    'tools' => ['Flutter'],
    'link' => '',
    'image' => '/src/images/projects/converter.png',
  ],
  [
    'title' => 'AU-based Car Sharing App',
    'description' => "<p class='block md:hidden italic pb-2'>As the nature of this work is confidential, there won't be any visuals to show for the time being. However, a description of the work done may be provided.</p><ul><li>One of the developers who worked on the front-end of the Web App and Admin/CMS of the new app deployed last March 2023.</li><li>Developed reusable React components, optimized UI performance, and improved responsiveness.</li><li>Updated booking interfaces, registration interfaces, enhanced interactive elements, and integrated API-driven content.</li><li>Collaborated with backend and mobile teams to ensure consistent cross-platform behavior.</li></ul>",
    'tools' => ['ReactJS', 'Typescript', 'Redux-Saga', 'Firestore', 'Tailwind CSS', 'SASS', 'REST APIs'],
    'link' => '',
    'image' => '',
  ],
  [
    'title' => 'AU-based Digital Warranty & Claims Platform',
    'description' => "<p class='block md:hidden italic pb-2'>As the nature of this work is confidential, there won't be any visuals to show for the time being. However, a description of the work done may be provided.</p><ul><li>Migrated the entire platform from Vue 2 to Vue 3, updating packages and dependencies for full compatibility.</li><li>Rebuilt and optimized UI components using Vue 3 + TailwindCSS, improving performance and maintainability.</li><li>Refactored legacy code to the Composition API and modern Vue structure.</li><li>Implemented the platform&apos;s new rebranding by converting Figma designs into clean, responsive layouts.</li><li>Performed regression testing to ensure key features remained stable after migration.</li></ul>",
    'tools' => ['Vue 3', 'JavaScript', 'Tailwind CSS', 'XState', 'Material UI'],
    'link' => '',
    'image' => '',
  ],
  [
    'title' => 'AU-based Clients Custom Theme WordPress Websites',
    'description' => "<p class='block md:hidden italic pb-2'>As the nature of this work is confidential, there won't be any visuals to show for the time being. However, a description of the work done may be provided.</p><ul><li>Built custom UI sections and animations, ensuring consistent branding and smooth user experience.</li><li>Implemented SASS-based styling, optimized layouts, and improved page responsiveness across devices.</li><li>Enhanced performance through asset optimization, reusable components, and mobile usability improvements.</li><li>Integrated SEO-friendly structures and assisted with bug fixes and front-end performance tuning.</li></ul>",
    'tools' => ['Wordpress', 'Custom Theme', 'TailwindCSS', 'Photoshop'],
    'link' => '',
    'image' => '',
  ],
  [
    'title' => 'US-based Investment Websites',
    'description' => "<ul><li>Designed and developed custom WordPress and Squarespace websites aligned with client branding, goals, and conversion needs.</li><li>Created mobile-first, responsive layouts with clean UI/UX, optimized performance, and modern visual design.</li></ul>",
    'tools' => ['Wordpress', 'Elementor Pro', 'Divi', 'Gutenberg', 'Photoshop'],
    'link' => '',
    'image' => '/src/images/projects/blackstock.png',
  ],
  [
    'title' => 'Sweet Things (Capstone Project)',
    'description' => "A full-stack e-commerce web app. With full responsiveness across mobile, tablet and desktop screen sizes. Awarded as <strong class='text-jam-gold'>Best Capstone 3</strong> in Zuitt's Full-Stack Web Development Course Batch 169.",
    'tools' => ['MongoDB', 'Express', 'ReactJS', 'NodeJS', 'Bootstrap', 'Vercel'],
    'link' => 'https://sweet-things.vercel.app/',
    'image' => '/src/images/projects/sweetthings.png',
  ],
];
?>

<section id="projects" class="bg-on-primary py-20 lg:py-28">
  <div class="mx-auto max-w-6xl px-6">
    <h2 class="font-display font-bold text-4xl md:text-5xl text-text mb-6 md:text-center transition-top transition-fade">
      Featured Projects
    </h2>
    <p class="mx-auto mb-12 max-w-2xl text-sm md:text-base text-muted md:text-center transition-top transition-fade">
      A selection of client work, product builds, and personal projects where I combine design, development, and problem-solving.
    </p>

    <!-- wrapper for stagger animation -->
    <div class="space-y-10">
      <?php foreach ($projects as $index => $project): ?>
        <?php
          $hasImage = !empty($project['image']);
          $isEven   = $index % 2 === 0;
        ?>
        <article
          class="group grid gap-8 rounded-2xl border border-border/40 bg-primary/5 px-6 py-6 md:grid-cols-2 md:px-8 md:py-8 transition-all hover:-translate-y-1 hover:border-accent/80 hover:shadow-lg transition-bottom"
        >
          <!-- Text column -->
          <div class="<?php echo $isEven ? 'order-1' : 'order-2'; ?> flex flex-col justify-start gap-2">
            <header class="mb-4">
              <h3 class="font-display text-2xl md:text-3xl text-text">
                <?php echo htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8'); ?>
              </h3>
            </header>

            <div class="text-sm md:text-md prose prose-sm max-w-none text-muted [&>ul]:list-disc [&>li]:marker:text-accent [&>a]:text-accent [&>ul]:pl-8">
              <?php echo $project['description']; ?>
            </div>

            <!-- Tools -->
            <?php if (!empty($project['tools'])): ?>
              <div class="mt-4 flex flex-wrap gap-2">
                <?php foreach ($project['tools'] as $tool): ?>
                  <span class="inline-flex items-center rounded-full bg-on-primary/80 px-3 py-1 text-xs font-medium text-text shadow-sm">
                    <?php echo htmlspecialchars($tool, ENT_QUOTES, 'UTF-8'); ?>
                  </span>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <!-- Link -->
            <?php if (!empty($project['link'])): ?>
              <div class="mt-5">
                <a
                  href="<?php echo htmlspecialchars($project['link'], ENT_QUOTES, 'UTF-8'); ?>"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="inline-flex items-center text-sm font-semibold text-accent hover:underline"
                >
                  View live project
                  <span aria-hidden="true" class="ml-1">↗</span>
                </a>
              </div>
            <?php endif; ?>
          </div>

          <!-- Image / placeholder column -->
          <div class="<?php echo $isEven ? 'order-2' : 'order-1'; ?> flex items-center justify-center">
            <?php if ($hasImage): ?>
              <figure class="w-full max-w-md overflow-hidden transition-scale">
                <img
                  src="<?php echo htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8'); ?>"
                  alt="<?php echo htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8'); ?>"
                  class="h-full w-full object-cover"
                />
              </figure>
            <?php else: ?>
              <div class="hidden md:flex h-full min-h-[180px] w-full max-w-md items-center justify-center px-6 text-center text-xs md:text-sm text-muted">
                <p>
                  Visuals for this project are confidential, but I&apos;m happy to share more
                  about the work, responsibilities, and outcomes upon request.
                </p>
              </div>
            <?php endif; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
