<footer class="mt-24 border-t border-border bg-secondary/40">
  <div class="mx-auto grid max-w-7xl gap-10 px-4 py-14 sm:px-6 lg:grid-cols-4 lg:px-8">
    <div>
      <div class="flex items-center gap-2 font-display text-lg font-bold">
        <span class="grid h-9 w-9 place-items-center rounded-xl bg-gradient-hero text-white">
          <i data-lucide="sun" class="h-5 w-5"></i>
        </span>
        SolarisPro
      </div>
      <p class="mt-3 text-sm text-muted-foreground">
        Napelemes rendszerek teljes körű kivitelezése, telepítése és pályázati ügyintézése egy kézből.
      </p>
    </div>

    <div>
      <h4 class="text-sm font-semibold text-slate-900">Oldalak</h4>
      <ul class="mt-3 space-y-2 text-sm text-muted-foreground">
        <li><a href="{{ route('services') }}" class="hover:text-primary">Szolgáltatások</a></li>
        <li><a href="{{ route('grants') }}" class="hover:text-primary">Pályázatok</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-primary">Rólunk</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-primary">Kapcsolat</a></li>
      </ul>
    </div>

    <div>
      <h4 class="text-sm font-semibold text-slate-900">Kapcsolat</h4>
      <ul class="mt-3 space-y-2 text-sm text-muted-foreground">
        <li class="flex items-center gap-2"><i data-lucide="phone" class="h-4 w-4 text-primary"></i> +36 30 123 4567</li>
        <li class="flex items-center gap-2"><i data-lucide="mail" class="h-4 w-4 text-primary"></i> info@solarispro.hu</li>
        <li class="flex items-center gap-2"><i data-lucide="map-pin" class="h-4 w-4 text-primary"></i> 1051 Budapest, Napfény u. 12.</li>
      </ul>
    </div>

    <div>
      <h4 class="text-sm font-semibold text-slate-900">Nyitvatartás</h4>
      <ul class="mt-3 space-y-2 text-sm text-muted-foreground">
        <li>Hétfő–Péntek: 8:00 – 17:00</li>
        <li>Szombat: 9:00 – 13:00</li>
        <li>Vasárnap: zárva</li>
      </ul>
    </div>
  </div>
  <div class="border-t border-border">
    <div class="mx-auto max-w-7xl px-4 py-5 text-center text-xs text-muted-foreground sm:px-6 lg:px-8">
      <span id="year"></span> SolarisPro Kft. Minden jog fenntartva.
    </div>
  </div>
</footer>
