@php
    $navItems = [
        ['route' => 'home', 'label' => 'Kezdőlap'],
        ['route' => 'services', 'label' => 'Szolgáltatások'],
        ['route' => 'grants', 'label' => 'Pályázatok'],
        ['route' => 'about', 'label' => 'Rólunk'],
        ['route' => 'contact', 'label' => 'Kapcsolat'],
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-border/60 bg-white/80 backdrop-blur-lg">
  <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
    <a href="{{ route('home') }}" class="flex items-center gap-2 font-display text-lg font-bold text-slate-900">
      <span class="grid h-9 w-9 place-items-center rounded-xl bg-gradient-hero text-white shadow-soft">
        <i data-lucide="sun" class="h-5 w-5"></i>
      </span>
      <span>SolarisPro</span>
    </a>

    <nav class="hidden items-center gap-1 md:flex">
      @foreach ($navItems as $item)
        <a href="{{ route($item['route']) }}" class="rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs($item['route']) ? 'bg-primary-soft text-primary' : 'text-muted-foreground hover:bg-primary-soft hover:text-primary' }}">{{ $item['label'] }}</a>
      @endforeach
    </nav>

    <a href="{{ route('contact') }}" class="hidden rounded-full bg-primary px-5 py-2.5 text-sm font-semibold text-white shadow-soft transition-transform hover:scale-105 md:inline-flex">
      Ajánlatkérés
    </a>

    <button id="menuBtn" class="grid h-10 w-10 place-items-center rounded-lg border border-border text-slate-900 md:hidden">
      <i data-lucide="menu" class="h-5 w-5"></i>
    </button>
  </div>

  <div id="mobileMenu" class="hidden border-t border-border bg-white md:hidden">
    <nav class="mx-auto flex max-w-7xl flex-col gap-1 px-4 py-3">
      @foreach ($navItems as $item)
        <a href="{{ route($item['route']) }}" class="rounded-lg px-3 py-2.5 text-sm font-medium {{ request()->routeIs($item['route']) ? 'bg-primary-soft text-primary' : 'text-muted-foreground hover:bg-primary-soft hover:text-primary' }}">{{ $item['label'] }}</a>
      @endforeach
      <a href="{{ route('contact') }}" class="mt-2 rounded-full bg-primary px-5 py-2.5 text-center text-sm font-semibold text-white">Ajánlatkérés</a>
    </nav>
  </div>
</header>
