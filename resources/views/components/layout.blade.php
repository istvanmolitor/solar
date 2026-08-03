@props([
    'title' => 'SolarisPro — Napelem kivitelezés, telepítés és pályázat',
    'description' => 'Teljes körű napelemes megoldások otthonra és vállalkozásoknak: tervezés, kivitelezés, telepítés és pályázati ügyintézés egy kézből.',
])
<!doctype html>
<html lang="hu">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}" />
<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>
<body class="flex min-h-screen flex-col bg-white font-sans text-slate-900">

@include('partials.header')

<main class="flex-1">
    {{ $slot }}
</main>

@include('partials.footer')

<script>
  lucide.createIcons();
  document.getElementById("year").textContent = "© " + new Date().getFullYear();
  document.getElementById("menuBtn").addEventListener("click", () => {
    document.getElementById("mobileMenu").classList.toggle("hidden");
  });
</script>
@stack('scripts')
</body>
</html>
