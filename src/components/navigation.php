<!-- Header wrapper used by global.js for pinning/hiding -->
<div class="header-wrapper z-100">
  <header
    class="header-wrapper__inner site-header bg-secondary backdrop-blur text-on-primary"
  >
    <div
      class="container mx-auto flex max-w-5xl items-center justify-between px-4 py-2 md:py-3"
    >
      <a
        href="#hero"
      >
        <img
          id="brand-logo"
          data-logo-base="/src/images/logos"
          src="/src/images/logos/jam-winter.png"
          alt="Jam"
          class="brand-logo h-9 w-auto md:h-16 transition duration-200"
        />
      </a>

      <!-- Mobile nav toggle -->
      <button
        class="header__menu-toggle nav__toggle inline-flex h-10 w-10 flex-col items-center justify-center gap-1.5 text-on-primary hover:bg-accent/10 focus:outline-none md:hidden"
        aria-controls="primary-menu"
        aria-expanded="false"
      >
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger block h-0.5 w-5 bg-on-primary"></span>
        <span class="hamburger block h-0.5 w-5 bg-on-primary"></span>
        <span class="hamburger block h-0.5 w-5 bg-on-primary"></span>
      </button>

      <!-- Main nav -->
<nav
  id="primary-menu"
  class="nav hidden items-center gap-6 md:flex"
>
  <div class="nav__inner flex h-full w-full flex-col md:flex-row md:items-center md:gap-6">
    <!-- Mobile header inside menu -->
    <div class="nav__mobile-header mb-6 flex items-center justify-between md:hidden">
      <a href="#hero">
        <img
          src="/src/images/logos/jam-winter.png"
          alt="Jam"
          class="h-9 w-auto"
        />
      </a>

      <!-- Close button -->
      <button
        class="mobile-close-btn h-10 w-10 flex items-center justify-center"
      >
        <span class="hamburger block h-0.5 w-5 bg-on-primary"></span>
        <span class="hamburger block h-0.5 w-5 bg-on-primary"></span>
      </button>
    </div>

    <ul
      class="nav__list flex flex-col gap-4 text-sm font-medium md:flex-row md:items-center md:gap-6"
    >
      <li>
        <a
          href="#about"
          class="transition-colors hover:text-accent"
        >
          About
        </a>
      </li>
      <li>
        <a
          href="#skills"
          class="transition-colors hover:text-accent"
        >
          Skill
        </a>
      </li>
      <li>
        <a
          href="#projects"
          class="transition-colors hover:text-accent"
        >
          Works
        </a>
      </li>
      <li>
        <a
          href="#contact"
          class="transition-colors hover:text-accent"
        >
          Contact
        </a>
      </li>
    </ul>

    <!-- Theme selector -->
    <div
      id="theme-selector"
      class="theme-selector ml-6 flex items-center gap-2 mt-auto md:mt-0 text-accent-mono!"
      data-icon-path="/images/theme-icons"
    ></div>
  </div>
</nav>

    </div>
  </header>
</div>
