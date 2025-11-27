<header
  class="site-header sticky top-0 z-50 bg-secondary backdrop-blur text-on-primary"
>
  <div
    class="container mx-auto flex max-w-5xl items-center justify-between px-4 py-3 md:py-4"
  >
    <img
      id="brand-logo"
      data-logo-base="/src/images/logos"
      src="/src/images/logos/jam-winter.png"
      alt="Jam"
      class="brand-logo h-9 w-auto md:h-10 transition duration-200"
    />

    <!-- Mobile nav toggle -->
    <button
      class="nav__toggle inline-flex h-10 w-10 items-center justify-center rounded-md border border-border/40 text-on-primary hover:bg-accent/10 focus:outline-none focus:ring-2 focus:ring-accent md:hidden"
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
      <ul
        class="flex flex-col gap-4 text-sm font-medium md:flex-row md:items-center md:gap-6"
      >
        <li>
          <a
            href="#home"
            class="transition-colors hover:text-accent"
          >
            Home
          </a>
        </li>
        <li>
          <a
            href="#skill"
            class="transition-colors hover:text-accent"
          >
            Skill
          </a>
        </li>
        <li>
          <a
            href="#works"
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
        class="theme-selector ml-6 flex items-center gap-2"
        data-icon-path="/images/theme-icons"
      ></div>
    </nav>
  </div>
</header>
