<x-layout
    title="SolarisPro — Napelem kivitelezés, telepítés és pályázat"
    description="Teljes körű napelemes megoldások otthonra és vállalkozásoknak: tervezés, kivitelezés, telepítés és pályázati ügyintézés egy kézből."
>

  <!-- HERO -->
  <section class="relative overflow-hidden bg-gradient-soft">
    <div class="absolute inset-0 bg-gradient-sky opacity-70" aria-hidden="true"></div>
    <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-4 pt-16 pb-20 sm:px-6 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:pt-24 lg:pb-28">
      <div>
        <span class="inline-flex items-center gap-2 rounded-full border border-primary/20 bg-primary-soft px-3 py-1 text-xs font-semibold text-primary">
          <i data-lucide="sun" class="h-3.5 w-3.5"></i> Napenergia szakértők 2012 óta
        </span>
        <h1 class="mt-5 font-display text-4xl font-bold leading-[1.05] text-slate-900 sm:text-5xl lg:text-6xl">
          Tiszta energia,
          <span class="block bg-gradient-hero bg-clip-text text-transparent">tiszta megtakarítás.</span>
        </h1>
        <p class="mt-6 max-w-xl text-lg text-muted-foreground">
          Kulcsrakész napelemes rendszerek otthonra és vállalkozásoknak. Tervezés, kivitelezés,
          telepítés és pályázati ügyintézés — mindent egy helyen intézünk.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full bg-primary px-6 py-3 text-sm font-semibold text-white shadow-glow transition-transform hover:scale-105">
            Ingyenes ajánlatkérés <i data-lucide="arrow-right" class="h-4 w-4"></i>
          </a>
          <a href="{{ route('services') }}" class="inline-flex items-center gap-2 rounded-full border border-border bg-white px-6 py-3 text-sm font-semibold text-slate-900 hover:bg-primary-soft">
            Szolgáltatásaink
          </a>
        </div>

        <dl class="mt-10 grid max-w-md grid-cols-3 gap-6">
          <div>
            <dt class="font-display text-2xl font-bold text-primary sm:text-3xl">1200+</dt>
            <dd class="text-xs text-muted-foreground">Telepítés</dd>
          </div>
          <div>
            <dt class="font-display text-2xl font-bold text-primary sm:text-3xl">12 év</dt>
            <dd class="text-xs text-muted-foreground">Tapasztalat</dd>
          </div>
          <div>
            <dt class="font-display text-2xl font-bold text-primary sm:text-3xl">25 év</dt>
            <dd class="text-xs text-muted-foreground">Garancia</dd>
          </div>
        </dl>
      </div>

      <div class="relative">
        <div class="absolute -inset-4 rounded-3xl bg-gradient-hero opacity-20 blur-2xl" aria-hidden="true"></div>
        <img
          src="{{ asset('images/hero-house.jpg') }}"
          alt="Modern családi ház napelemekkel a tetőn"
          width="1600"
          height="1000"
          class="relative aspect-[4/3] w-full rounded-3xl object-cover shadow-glow"
        />
        <div class="absolute -bottom-6 -left-6 hidden max-w-[220px] rounded-2xl border border-border bg-white/95 p-4 shadow-soft backdrop-blur sm:block">
          <div class="flex items-center gap-3">
            <div class="grid h-10 w-10 place-items-center rounded-xl bg-primary-soft text-primary">
              <i data-lucide="trending-down" class="h-5 w-5"></i>
            </div>
            <div>
              <p class="text-xs text-muted-foreground">Éves megtakarítás</p>
              <p class="font-display text-lg font-bold text-slate-900">akár 85%</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <p class="text-sm font-semibold uppercase tracking-wider text-primary">Szolgáltatásaink</p>
      <h2 class="mt-2 text-3xl font-bold sm:text-4xl">Mindent egy kézből intézünk</h2>
      <p class="mt-3 text-muted-foreground">
        A tervezéstől a hálózati bekapcsolásig minden lépést mi bonyolítunk le.
      </p>
    </div>

    <div class="mt-12 grid gap-6 md:grid-cols-3">
      <div class="group relative overflow-hidden rounded-2xl border border-border bg-white p-8 transition-all hover:-translate-y-1 hover:shadow-soft">
        <div class="grid h-12 w-12 place-items-center rounded-xl bg-gradient-hero text-white shadow-soft">
          <i data-lucide="file-text" class="h-6 w-6"></i>
        </div>
        <h3 class="mt-5 text-xl font-semibold">Tervezés &amp; felmérés</h3>
        <p class="mt-2 text-sm text-muted-foreground">Helyszíni felmérés, egyedi tervezés és pontos árajánlat 48 órán belül.</p>
        <a href="{{ route('services') }}" class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-primary hover:gap-2 transition-all">
          Bővebben <i data-lucide="arrow-right" class="h-4 w-4"></i>
        </a>
      </div>
      <div class="group relative overflow-hidden rounded-2xl border border-border bg-white p-8 transition-all hover:-translate-y-1 hover:shadow-soft">
        <div class="grid h-12 w-12 place-items-center rounded-xl bg-gradient-hero text-white shadow-soft">
          <i data-lucide="wrench" class="h-6 w-6"></i>
        </div>
        <h3 class="mt-5 text-xl font-semibold">Teljes kivitelezés</h3>
        <p class="mt-2 text-sm text-muted-foreground">Szakértő csapatunk 1–2 nap alatt telepíti a rendszert. Nincs rejtett költség.</p>
        <a href="{{ route('services') }}" class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-primary hover:gap-2 transition-all">
          Bővebben <i data-lucide="arrow-right" class="h-4 w-4"></i>
        </a>
      </div>
      <div class="group relative overflow-hidden rounded-2xl border border-border bg-white p-8 transition-all hover:-translate-y-1 hover:shadow-soft">
        <div class="grid h-12 w-12 place-items-center rounded-xl bg-gradient-hero text-white shadow-soft">
          <i data-lucide="file-text" class="h-6 w-6"></i>
        </div>
        <h3 class="mt-5 text-xl font-semibold">Pályázati ügyintézés</h3>
        <p class="mt-2 text-sm text-muted-foreground">A jelenleg elérhető támogatások teljes körű ügyintézését is intézzük Ön helyett.</p>
        <a href="{{ route('services') }}" class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-primary hover:gap-2 transition-all">
          Bővebben <i data-lucide="arrow-right" class="h-4 w-4"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- WHY US -->
  <section class="bg-secondary/40 py-20">
    <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:px-8">
      <div class="relative">
        <img
          src="{{ asset('images/panels-closeup.jpg') }}"
          alt="Napelemek közelről"
          loading="lazy"
          width="1600"
          height="900"
          class="aspect-[4/3] w-full rounded-3xl object-cover shadow-soft"
        />
      </div>
      <div>
        <p class="text-sm font-semibold uppercase tracking-wider text-primary">Miért minket válasszon?</p>
        <h2 class="mt-2 text-3xl font-bold sm:text-4xl">Megbízhatóság minden lépésben</h2>
        <p class="mt-3 text-muted-foreground">
          Több mint egy évtizedes tapasztalattal és több mint 1200 sikeres telepítéssel a hátunk mögött
          biztonságos választás vagyunk otthonok és cégek számára egyaránt.
        </p>
        <ul class="mt-6 space-y-4">
          <li class="flex gap-3">
            <i data-lucide="check-circle-2" class="mt-0.5 h-5 w-5 shrink-0 text-primary"></i>
            <div>
              <p class="font-semibold text-slate-900">Prémium márkák</p>
              <p class="text-sm text-muted-foreground">Csak Tier-1 gyártók paneljeivel és inverterekkel dolgozunk.</p>
            </div>
          </li>
          <li class="flex gap-3">
            <i data-lucide="check-circle-2" class="mt-0.5 h-5 w-5 shrink-0 text-primary"></i>
            <div>
              <p class="font-semibold text-slate-900">25 év garancia</p>
              <p class="text-sm text-muted-foreground">Termék- és teljesítménygarancia hosszú távra.</p>
            </div>
          </li>
          <li class="flex gap-3">
            <i data-lucide="check-circle-2" class="mt-0.5 h-5 w-5 shrink-0 text-primary"></i>
            <div>
              <p class="font-semibold text-slate-900">Saját kivitelező csapat</p>
              <p class="text-sm text-muted-foreground">Nincs alvállalkozó, nincs meglepetés.</p>
            </div>
          </li>
          <li class="flex gap-3">
            <i data-lucide="check-circle-2" class="mt-0.5 h-5 w-5 shrink-0 text-primary"></i>
            <div>
              <p class="font-semibold text-slate-900">Teljes körű ügyintézés</p>
              <p class="text-sm text-muted-foreground">Engedélyek, hálózati bejelentés, pályázat — mind mi.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
      <div>
        <p class="text-sm font-semibold uppercase tracking-wider text-primary">Folyamat</p>
        <h2 class="mt-2 text-3xl font-bold sm:text-4xl">Négy lépés a napenergiához</h2>
        <p class="mt-3 text-muted-foreground">
          Egy egyszerű, átlátható folyamat, ami biztonságot ad Önnek az első hívástól az utolsó kilowattig.
        </p>
        <ol class="mt-8 space-y-6">
          <li class="flex gap-4">
            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-full bg-gradient-hero font-display font-bold text-white shadow-soft">1</span>
            <div>
              <p class="font-semibold">Konzultáció</p>
              <p class="text-sm text-muted-foreground">Ingyenes tanácsadás telefonon vagy személyesen.</p>
            </div>
          </li>
          <li class="flex gap-4">
            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-full bg-gradient-hero font-display font-bold text-white shadow-soft">2</span>
            <div>
              <p class="font-semibold">Felmérés &amp; tervezés</p>
              <p class="text-sm text-muted-foreground">Helyszíni felmérés és egyedi rendszerterv.</p>
            </div>
          </li>
          <li class="flex gap-4">
            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-full bg-gradient-hero font-display font-bold text-white shadow-soft">3</span>
            <div>
              <p class="font-semibold">Kivitelezés</p>
              <p class="text-sm text-muted-foreground">Gyors, precíz telepítés saját csapattal.</p>
            </div>
          </li>
          <li class="flex gap-4">
            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-full bg-gradient-hero font-display font-bold text-white shadow-soft">4</span>
            <div>
              <p class="font-semibold">Bekapcsolás</p>
              <p class="text-sm text-muted-foreground">Hálózati engedély, üzembe helyezés és átadás.</p>
            </div>
          </li>
        </ol>
      </div>
      <div class="relative">
        <div class="absolute -inset-6 rounded-3xl bg-primary-soft/60 blur-2xl" aria-hidden="true"></div>
        <img
          src="{{ asset('images/illustration-energy.jpg') }}"
          alt="Napelem illusztráció"
          loading="lazy"
          width="1200"
          height="900"
          class="relative w-full rounded-3xl bg-white object-contain p-4 shadow-soft"
        />
      </div>
    </div>
  </section>

  <!-- BENEFITS -->
  <section class="bg-gradient-hero py-20 text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="grid gap-8 md:grid-cols-3">
        <div class="rounded-2xl border border-white/15 bg-white/10 p-6 backdrop-blur">
          <i data-lucide="zap" class="h-8 w-8"></i>
          <h3 class="mt-4 text-xl font-semibold">Alacsonyabb rezsi</h3>
          <p class="mt-1 text-sm text-white/80">Villanyszámla-megtakarítás akár 85%.</p>
        </div>
        <div class="rounded-2xl border border-white/15 bg-white/10 p-6 backdrop-blur">
          <i data-lucide="leaf" class="h-8 w-8"></i>
          <h3 class="mt-4 text-xl font-semibold">Zöldebb otthon</h3>
          <p class="mt-1 text-sm text-white/80">Csökkentse CO₂-kibocsátását azonnal.</p>
        </div>
        <div class="rounded-2xl border border-white/15 bg-white/10 p-6 backdrop-blur">
          <i data-lucide="shield-check" class="h-8 w-8"></i>
          <h3 class="mt-4 text-xl font-semibold">Értéknövelő beruházás</h3>
          <p class="mt-1 text-sm text-white/80">Növeli az ingatlan értékét.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="mx-auto max-w-4xl px-4 py-20 text-center sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold sm:text-4xl">Készen áll a napenergiára?</h2>
    <p class="mt-3 text-muted-foreground">
      Kérjen ingyenes, kötelezettségek nélküli ajánlatot még ma. 48 órán belül válaszolunk.
    </p>
    <a href="{{ route('contact') }}" class="mt-8 inline-flex items-center gap-2 rounded-full bg-primary px-6 py-3 text-sm font-semibold text-white shadow-glow hover:scale-105 transition-transform">
      Ajánlatkérés <i data-lucide="arrow-right" class="h-4 w-4"></i>
    </a>
  </section>

</x-layout>
