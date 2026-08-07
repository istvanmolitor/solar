<x-ui::layout.page
    title="SolarisPro — Napelem kivitelezés, telepítés és pályázat"
    description="Teljes körű napelemes megoldások otthonra és vállalkozásoknak: tervezés, kivitelezés, telepítés és pályázati ügyintézés egy kézből."
>

  {{-- HERO --}}
  <x-ui::layout.hero
      eyebrow="Napenergia szakértők 2012 óta"
      eyebrowIcon="sun"
      title="Tiszta energia,"
      highlight="tiszta megtakarítás."
      description="Kulcsrakész napelemes rendszerek otthonra és vállalkozásoknak. Tervezés, kivitelezés, telepítés és pályázati ügyintézés — mindent egy helyen intézünk."
      :primary-href="route('contact')"
      primaryLabel="Ingyenes ajánlatkérés"
      :secondary-href="route('services')"
      secondaryLabel="Szolgáltatásaink"
      :image="asset('images/hero-house.jpg')"
      imageAlt="Modern családi ház napelemekkel a tetőn"
      badgeIcon="trending-down"
      badgeLabel="Éves megtakarítás"
      badgeValue="akár 85%"
  >
      <x-slot:stats>
          <x-ui::layout.stat value="1200+" label="Telepítés" />
          <x-ui::layout.stat value="12 év" label="Tapasztalat" />
          <x-ui::layout.stat value="25 év" label="Garancia" />
      </x-slot:stats>
  </x-ui::layout.hero>

  {{-- SERVICES --}}
  <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <x-ui::layout.section-header
        align="center"
        eyebrow="Szolgáltatásaink"
        description="A tervezéstől a hálózati bekapcsolásig minden lépést mi bonyolítunk le."
    >
      Mindent egy kézből intézünk
    </x-ui::layout.section-header>

    <div class="mt-12 grid gap-6 md:grid-cols-3">
      <x-ui::layout.feature-card
          icon="file-text"
          description="Helyszíni felmérés, egyedi tervezés és pontos árajánlat 48 órán belül."
          :href="route('services')"
      >Tervezés & felmérés</x-ui::layout.feature-card>
      <x-ui::layout.feature-card
          icon="wrench"
          description="Szakértő csapatunk 1–2 nap alatt telepíti a rendszert. Nincs rejtett költség."
          :href="route('services')"
      >Teljes kivitelezés</x-ui::layout.feature-card>
      <x-ui::layout.feature-card
          icon="file-text"
          description="A jelenleg elérhető támogatások teljes körű ügyintézését is intézzük Ön helyett."
          :href="route('services')"
      >Pályázati ügyintézés</x-ui::layout.feature-card>
    </div>
  </section>

  {{-- WHY US --}}
  <section class="bg-secondary/40 py-20">
    <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:px-8">
      <img
        src="{{ asset('images/panels-closeup.jpg') }}"
        alt="Napelemek közelről"
        loading="lazy"
        width="1600"
        height="900"
        class="aspect-[4/3] w-full rounded-3xl object-cover shadow-soft"
      />
      <div>
        <x-ui::layout.section-header
            eyebrow="Miért minket válasszon?"
            description="Több mint egy évtizedes tapasztalattal és több mint 1200 sikeres telepítéssel a hátunk mögött biztonságos választás vagyunk otthonok és cégek számára egyaránt."
        >
          Megbízhatóság minden lépésben
        </x-ui::layout.section-header>

        <x-ui::list.checklist-items>
          <x-ui::list.checklist-item description="Csak Tier-1 gyártók paneljeivel és inverterekkel dolgozunk.">
            Prémium márkák
          </x-ui::list.checklist-item>
          <x-ui::list.checklist-item description="Termék- és teljesítménygarancia hosszú távra.">
            25 év garancia
          </x-ui::list.checklist-item>
          <x-ui::list.checklist-item description="Nincs alvállalkozó, nincs meglepetés.">
            Saját kivitelező csapat
          </x-ui::list.checklist-item>
          <x-ui::list.checklist-item description="Engedélyek, hálózati bejelentés, pályázat — mind mi.">
            Teljes körű ügyintézés
          </x-ui::list.checklist-item>
        </x-ui::list.checklist-items>
      </div>
    </div>
  </section>

  {{-- PROCESS --}}
  <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
      <div>
        <x-ui::layout.section-header
            eyebrow="Folyamat"
            description="Egy egyszerű, átlátható folyamat, ami biztonságot ad Önnek az első hívástól az utolsó kilowattig."
        >
          Négy lépés a napenergiához
        </x-ui::layout.section-header>

        <x-ui::list.steps class="mt-8">
          <x-ui::list.step number="1" description="Ingyenes tanácsadás telefonon vagy személyesen.">Konzultáció</x-ui::list.step>
          <x-ui::list.step number="2" description="Helyszíni felmérés és egyedi rendszerterv.">Felmérés & tervezés</x-ui::list.step>
          <x-ui::list.step number="3" description="Gyors, precíz telepítés saját csapattal.">Kivitelezés</x-ui::list.step>
          <x-ui::list.step number="4" description="Hálózati engedély, üzembe helyezés és átadás.">Bekapcsolás</x-ui::list.step>
        </x-ui::list.steps>
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

  {{-- BENEFITS --}}
  <x-ui::layout.feature-cards variant="dark">
    <x-ui::layout.feature-card variant="dark" icon="zap" description="Villanyszámla-megtakarítás akár 85%.">Alacsonyabb rezsi</x-ui::layout.feature-card>
    <x-ui::layout.feature-card variant="dark" icon="leaf" description="Csökkentse CO₂-kibocsátását azonnal.">Zöldebb otthon</x-ui::layout.feature-card>
    <x-ui::layout.feature-card variant="dark" icon="shield-check" description="Növeli az ingatlan értékét.">Értéknövelő beruházás</x-ui::layout.feature-card>
  </x-ui::layout.feature-cards>

  {{-- CTA --}}
  <x-ui::layout.cta
      title="Készen áll a napenergiára?"
      description="Kérjen ingyenes, kötelezettségek nélküli ajánlatot még ma. 48 órán belül válaszolunk."
      :href="route('contact')"
      buttonLabel="Ajánlatkérés"
  />

</x-ui::layout.page>
