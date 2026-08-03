<x-layout
    title="Rólunk — SolarisPro napenergia szakértők"
    description="Több mint 12 év tapasztalat, 1200+ telepítés, saját szerelő csapat. Ismerje meg a SolarisPro csapatát."
>

  <section class="bg-gradient-soft">
    <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:px-8">
      <div>
        <p class="text-sm font-semibold uppercase tracking-wider text-primary">Rólunk</p>
        <h1 class="mt-2 font-display text-4xl font-bold leading-tight sm:text-5xl">
          Több mint egy évtizede a napenergia szolgálatában
        </h1>
        <p class="mt-4 text-lg text-muted-foreground">
          A SolarisPro-t 2012-ben alapítottuk azzal a küldetéssel, hogy a napenergiát elérhetővé
          és egyszerűvé tegyük minden magyar háztartás és vállalkozás számára.
        </p>
      </div>
      <img
        src="{{ asset('images/panels-closeup.jpg') }}"
        alt="Napelemek"
        loading="lazy"
        width="1600"
        height="900"
        class="aspect-[4/3] w-full rounded-3xl object-cover shadow-soft"
      />
    </div>
  </section>

  <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <div class="grid gap-6 md:grid-cols-4">
      <div class="rounded-2xl border border-border bg-white p-6 text-center">
        <p class="font-display text-3xl font-bold text-primary sm:text-4xl">12+</p>
        <p class="mt-1 text-sm text-muted-foreground">év tapasztalat</p>
      </div>
      <div class="rounded-2xl border border-border bg-white p-6 text-center">
        <p class="font-display text-3xl font-bold text-primary sm:text-4xl">1200+</p>
        <p class="mt-1 text-sm text-muted-foreground">sikeres telepítés</p>
      </div>
      <div class="rounded-2xl border border-border bg-white p-6 text-center">
        <p class="font-display text-3xl font-bold text-primary sm:text-4xl">25 év</p>
        <p class="mt-1 text-sm text-muted-foreground">garancia</p>
      </div>
      <div class="rounded-2xl border border-border bg-white p-6 text-center">
        <p class="font-display text-3xl font-bold text-primary sm:text-4xl">98%</p>
        <p class="mt-1 text-sm text-muted-foreground">elégedett ügyfél</p>
      </div>
    </div>

    <div class="mt-20 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
      <div class="rounded-2xl border border-border p-6">
        <i data-lucide="award" class="h-7 w-7 text-primary"></i>
        <h3 class="mt-4 font-semibold">Minőség</h3>
        <p class="mt-1 text-sm text-muted-foreground">Csak Tier-1 gyártóktól származó panelek és inverterek.</p>
      </div>
      <div class="rounded-2xl border border-border p-6">
        <i data-lucide="users" class="h-7 w-7 text-primary"></i>
        <h3 class="mt-4 font-semibold">Csapat</h3>
        <p class="mt-1 text-sm text-muted-foreground">20 fős, saját, folyamatosan képzett szakember gárda.</p>
      </div>
      <div class="rounded-2xl border border-border p-6">
        <i data-lucide="leaf" class="h-7 w-7 text-primary"></i>
        <h3 class="mt-4 font-semibold">Fenntarthatóság</h3>
        <p class="mt-1 text-sm text-muted-foreground">Minden telepítéssel csökkentjük Magyarország CO₂-terhelését.</p>
      </div>
      <div class="rounded-2xl border border-border p-6">
        <i data-lucide="sparkles" class="h-7 w-7 text-primary"></i>
        <h3 class="mt-4 font-semibold">Innováció</h3>
        <p class="mt-1 text-sm text-muted-foreground">Modern tervezőszoftver, monitoring és okos vezérlés.</p>
      </div>
    </div>
  </section>

  <section class="bg-secondary/40 py-20">
    <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold sm:text-4xl">Küldetésünk</h2>
      <p class="mt-4 text-lg text-muted-foreground">
        „Hisszük, hogy a napenergia nemcsak a jövő, hanem a jelen kulcsa is. Ezért minden nap azon dolgozunk,
        hogy a tiszta energia elérhető, megfizethető és egyszerű legyen mindenki számára.”
      </p>
      <p class="mt-6 font-display font-semibold">— A SolarisPro csapata</p>
    </div>
  </section>

  <section class="mx-auto max-w-4xl px-4 py-20 text-center sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold sm:text-4xl">Csatlakozzon több mint 1200 elégedett ügyfelünkhöz</h2>
    <a href="{{ route('contact') }}" class="mt-8 inline-flex items-center gap-2 rounded-full bg-primary px-6 py-3 text-sm font-semibold text-white shadow-glow hover:scale-105 transition-transform">
      Beszéljünk <i data-lucide="arrow-right" class="h-4 w-4"></i>
    </a>
  </section>

</x-layout>
