<!-- Program Schedule Section -->
<section id="program" class="py-16 bg-green-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">CHƯƠNG TRÌNH HỘI NGHỊ</h2>
      <div class="w-16 h-1 bg-green-500 mx-auto"></div>
    </div>

    <div class="max-w-5xl mx-auto">
      <div class="space-y-4">
        @foreach ($conferenceData['program'] as $index => $item)
          <div class="flex items-start space-x-4">
            <div class="flex-shrink-0 w-24 text-sm font-semibold text-gray-800 pt-1">
              {{ $item['time'] }}
            </div>
            <div class="flex-1 {{ $item['type'] == 'main' ? 'bg-gradient-to-r from-green-200 to-green-300 text-gray-900' : 'bg-white' }} p-4 rounded-lg shadow-sm">
              @if ($item['type'] == 'main')
                <div class="text-center">
                  <h3 class="text-lg font-bold mb-1">{{ $item['title'] }}</h3>
                  <p class="text-sm text-gray-700">{{ $item['description'] }}</p>
                </div>
              @else
                <div class="flex items-center">
                  <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                  <div class="flex-1">
                    <span class="text-gray-800 {{ $item['type'] == 'plenary' || $item['type'] == 'specialized' ? 'font-bold' : 'font-semibold' }}">{{ $item['title'] }}</span>
                    @if (isset($item['description']))
                      <p class="text-sm text-gray-600 mt-1">{{ $item['description'] }}</p>
                    @endif

                    @if (isset($item['sub_sessions']))
                      <div class="mt-3 ml-6 space-y-2">
                        @foreach ($item['sub_sessions'] as $subSession)
                          <div class="flex items-center">
                            <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                            <span class="text-sm text-gray-700">{{ $subSession }}</span>
                          </div>
                        @endforeach
                      </div>
                    @endif
                  </div>
                </div>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
