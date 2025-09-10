<!-- Conference Sections -->
<section id="sections" class="py-16 bg-green-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">THÔNG TIN HỘI NGHỊ</h2>
      <div class="w-16 h-1 bg-green-500 mx-auto"></div>
    </div>

    <div class="space-y-8">
      @foreach ($conferenceData['sections'] as $section)
        <div class="bg-gradient-to-r from-green-100 to-green-200 rounded-lg shadow-lg p-6 text-gray-900">
          <h3 class="text-2xl font-bold tracking-wide mb-6">{{ $section['title'] }}</h3>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($section['items'] as $item)
              <a href="{{ $item['url'] }}"
                class="block bg-white bg-opacity-60 rounded-lg p-4 hover:bg-opacity-80 hover:scale-105 hover:shadow-lg transition-all duration-300 ease-in-out transform">
                <div class="flex items-start">
                  <div class="flex-1">
                    <h4 class="text-gray-800 font-semibold hover:text-gray-900 transition-colors">{{ $item['title'] }}</h4>
                    <p class="text-sm text-gray-600 mt-1">{{ $item['description'] }}</p>
                  </div>
                </div>
              </a>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
