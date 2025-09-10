<!-- Sponsors Section -->
<section id="sponsors" class="py-16 bg-green-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">ĐỐI TÁC VÀ TÀI TRỢ</h2>
      <div class="w-16 h-1 bg-green-500 mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      @foreach ($conferenceData['sponsors'] as $sponsor)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl hover:scale-105 transition-all duration-300 border border-green-200">
          <div class="aspect-w-3 aspect-h-2">
            <img src="{{ $sponsor['logo'] }}" alt="{{ $sponsor['name'] }}" class="w-full h-48 object-contain object-center p-4">
          </div>
          <div class="p-4 bg-gradient-to-r from-green-50 to-green-100">
            <h3 class="text-lg font-semibold text-gray-800 text-center">{{ $sponsor['name'] }}</h3>
            @if (isset($sponsor['category']))
              <p class="text-sm text-gray-600 text-center mt-1">{{ $sponsor['category'] }}</p>
            @endif
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
