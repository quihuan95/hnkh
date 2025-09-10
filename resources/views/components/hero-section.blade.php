<!-- Hero Section -->
<section class="relative">
  <div class="relative">
    <img src="{{ asset('storage/images/header_banner.jpg') }}" alt="Header Banner" class="w-full h-auto">
    <!-- Overlay for better text readability -->
    {{-- <div class="absolute inset-0 bg-gradient-to-t from-blue-800/50 via-transparent to-transparent"></div> --}}

    <!-- Conference Info Overlay -->
    {{-- <div class="absolute bottom-8 left-8 right-8 text-white">
      <div class="container mx-auto px-4">
        <h1 class="text-3xl md:text-5xl font-bold mb-4 text-shadow-lg">{{ $conferenceData['title'] }}</h1>
        <p class="text-lg md:text-xl mb-6 max-w-4xl leading-relaxed text-shadow">
          {{ $conferenceData['subtitle'] }}
        </p>
        <div class="flex flex-col md:flex-row items-start md:items-center space-y-3 md:space-y-0 md:space-x-8">
          <div class="flex items-center bg-green-800/80 backdrop-blur-sm rounded-lg px-4 py-2">
            <svg class="w-5 h-5 mr-2 text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="text-sm font-semibold text-green-100">{{ $conferenceData['date'] }}</span>
          </div>
          <div class="flex items-center bg-blue-800/80 backdrop-blur-sm rounded-lg px-4 py-2">
            <svg class="w-5 h-5 mr-2 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span class="text-sm font-semibold text-blue-100">{{ $conferenceData['location'] }}</span>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
</section>
