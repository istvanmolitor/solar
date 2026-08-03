<x-layout
    title="Kapcsolat — SolarisPro | Ingyenes napelem ajánlatkérés"
    description="Kérjen ingyenes, kötelezettségek nélküli ajánlatot napelemes rendszerére. 48 órán belül válaszolunk."
>

  <section class="bg-gradient-soft">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
      <p class="text-sm font-semibold uppercase tracking-wider text-primary">Kapcsolat</p>
      <h1 class="mt-2 max-w-3xl font-display text-4xl font-bold leading-tight sm:text-5xl">
        Kérjen ingyenes ajánlatot
      </h1>
      <p class="mt-4 max-w-2xl text-lg text-muted-foreground">
        Töltse ki az űrlapot, vagy hívjon minket közvetlenül. 48 órán belül személyre szabott ajánlattal jelentkezünk.
      </p>
    </div>
  </section>

  <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="grid gap-10 lg:grid-cols-[1fr_1.2fr]">
      <!-- Info -->
      <div class="space-y-4">
        <a href="tel:+36301234567" class="flex items-start gap-4 rounded-2xl border border-border bg-white p-5 transition-colors hover:border-primary">
          <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-primary-soft text-primary">
            <i data-lucide="phone" class="h-5 w-5"></i>
          </div>
          <div class="min-w-0">
            <p class="text-xs font-semibold uppercase tracking-wider text-muted-foreground">Telefon</p>
            <p class="mt-0.5 truncate font-medium text-slate-900">+36 30 123 4567</p>
          </div>
        </a>
        <a href="mailto:info@solarispro.hu" class="flex items-start gap-4 rounded-2xl border border-border bg-white p-5 transition-colors hover:border-primary">
          <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-primary-soft text-primary">
            <i data-lucide="mail" class="h-5 w-5"></i>
          </div>
          <div class="min-w-0">
            <p class="text-xs font-semibold uppercase tracking-wider text-muted-foreground">E-mail</p>
            <p class="mt-0.5 truncate font-medium text-slate-900">info@solarispro.hu</p>
          </div>
        </a>
        <div class="flex items-start gap-4 rounded-2xl border border-border bg-white p-5">
          <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-primary-soft text-primary">
            <i data-lucide="map-pin" class="h-5 w-5"></i>
          </div>
          <div class="min-w-0">
            <p class="text-xs font-semibold uppercase tracking-wider text-muted-foreground">Iroda</p>
            <p class="mt-0.5 truncate font-medium text-slate-900">1051 Budapest, Napfény u. 12.</p>
          </div>
        </div>
        <div class="flex items-start gap-4 rounded-2xl border border-border bg-white p-5">
          <div class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-primary-soft text-primary">
            <i data-lucide="clock" class="h-5 w-5"></i>
          </div>
          <div class="min-w-0">
            <p class="text-xs font-semibold uppercase tracking-wider text-muted-foreground">Nyitvatartás</p>
            <p class="mt-0.5 truncate font-medium text-slate-900">H–P: 8:00–17:00, Szo: 9:00–13:00</p>
          </div>
        </div>
      </div>

      <!-- Form -->
      <form id="contactForm" class="rounded-3xl border border-border bg-white p-6 shadow-soft sm:p-8">
        <div id="formFields">
          <div class="grid gap-4 sm:grid-cols-2">
            <div>
              <label for="name" class="text-sm font-medium">Név<span class="text-primary"> *</span></label>
              <input id="name" name="name" type="text" required class="mt-1.5 w-full rounded-xl border border-input bg-white px-4 py-2.5 text-sm outline-none focus:border-primary focus:ring-2 focus:ring-primary/30" />
            </div>
            <div>
              <label for="phone" class="text-sm font-medium">Telefonszám<span class="text-primary"> *</span></label>
              <input id="phone" name="phone" type="tel" required class="mt-1.5 w-full rounded-xl border border-input bg-white px-4 py-2.5 text-sm outline-none focus:border-primary focus:ring-2 focus:ring-primary/30" />
            </div>
            <div class="sm:col-span-2">
              <label for="email" class="text-sm font-medium">E-mail<span class="text-primary"> *</span></label>
              <input id="email" name="email" type="email" required class="mt-1.5 w-full rounded-xl border border-input bg-white px-4 py-2.5 text-sm outline-none focus:border-primary focus:ring-2 focus:ring-primary/30" />
            </div>
            <div>
              <label for="zip" class="text-sm font-medium">Irányítószám</label>
              <input id="zip" name="zip" type="text" class="mt-1.5 w-full rounded-xl border border-input bg-white px-4 py-2.5 text-sm outline-none focus:border-primary focus:ring-2 focus:ring-primary/30" />
            </div>
            <div>
              <label class="text-sm font-medium">Rendszer típusa</label>
              <select class="mt-1.5 w-full rounded-xl border border-input bg-white px-4 py-2.5 text-sm outline-none focus:border-primary focus:ring-2 focus:ring-primary/30">
                <option>Lakossági</option>
                <option>Vállalati</option>
                <option>Energiatárolás</option>
                <option>Nem tudom</option>
              </select>
            </div>
          </div>
          <div class="mt-4">
            <label for="message" class="text-sm font-medium">Üzenet</label>
            <textarea id="message" rows="5" class="mt-1.5 w-full rounded-xl border border-input bg-white px-4 py-2.5 text-sm outline-none focus:border-primary focus:ring-2 focus:ring-primary/30" placeholder="Írja le röviden, miben segíthetünk..."></textarea>
          </div>
          <button type="submit" class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-full bg-primary px-6 py-3 text-sm font-semibold text-white shadow-glow transition-transform hover:scale-[1.02] sm:w-auto">
            Ajánlatkérés elküldése <i data-lucide="send" class="h-4 w-4"></i>
          </button>
          <p class="mt-3 text-xs text-muted-foreground">
            Az űrlap elküldésével elfogadja adatkezelési tájékoztatónkat.
          </p>
        </div>
        <div id="formSent" class="hidden py-16 text-center">
          <div class="mx-auto grid h-14 w-14 place-items-center rounded-full bg-primary-soft text-primary">
            <i data-lucide="send" class="h-6 w-6"></i>
          </div>
          <h3 class="mt-4 text-xl font-semibold">Köszönjük megkeresését!</h3>
          <p class="mt-2 text-sm text-muted-foreground">48 órán belül felvesszük Önnel a kapcsolatot.</p>
        </div>
      </form>
    </div>
  </section>

  @push('scripts')
    <script>
      document.getElementById("contactForm").addEventListener("submit", (e) => {
        e.preventDefault();
        document.getElementById("formFields").classList.add("hidden");
        document.getElementById("formSent").classList.remove("hidden");
      });
    </script>
  @endpush

</x-layout>
