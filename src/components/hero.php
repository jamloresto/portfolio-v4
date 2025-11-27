<section
  id="hero"
  class="relative overflow-hidden bg-on-primary p-12 md:p-20 lg:p-28 w-screen h-screen flex justify-baseline"
  aria-labelledby="hero-title"
>
  <!-- Background image -->
  <div
    class="pointer-events-none absolute inset-0 opacity-40 md:inset-y-0 ml-auto md:right-0 md:w-2/3 md:opacity-100 transition-right"
    aria-hidden="true"
  >
    <div
      class="h-full w-full bg-[url('/src/images/misc/jam.jpg')] bg-cover bg-center md:bg-right"
    >
      <!-- fade from right (image) to left (solid bg) -->
      <div
        class="hidden md:block h-full w-full bg-linear-to-l from-on-primary/0 via-on-primary/25 to-on-primary"
      ></div>
    </div>
  </div>

  <!-- Content -->
  <div
    class="relative z-10 py-16 mt-auto mr-auto flex max-w-6xl flex-col gap-12 px-6 lg:flex-row lg:items-center lg:gap-20 transition-fade"
  >
    <!-- children of this div will stagger in from bottom -->
    <div
      class="flex-1 text-center lg:text-left"
    >
      <h1
        id="hero-title"
        class="font-display font-extrabold text-4xl md:text-5xl lg:text-6xl"
      >
        <span
          class="inline-block text-secondary scale-x-[-1] transition-left"
        >
          Designer
        </span>
        <span
          class="inline-block text-text transition-right"
        >
          Developer
        </span>
      </h1>

      <p
        class="mt-6 max-w-xl text-base leading-relaxed text-muted lg:text-lg transition-bottom"
      >
        A front-end developer, full-stack problem solver, and web designer who
        loves turning ideas into smooth, intuitive, and meaningful digital
        experiences.
      </p>

      <div
        class="mt-8 flex flex-col items-center gap-4 sm:flex-row sm:justify-center lg:justify-start transition-bottom"
      >
        <a
          href="#projects"
          class="rounded-lg bg-primary px-6 py-3 text-on-primary shadow-md transition hover:bg-secondary"
        >
          View My Work
        </a>

        <a
          href="#contact"
          class="rounded-lg border border-border px-6 py-3 text-text transition hover:border-accent hover:text-accent"
        >
          Contact Me
        </a>
      </div>
    </div>
  </div>
</section>
