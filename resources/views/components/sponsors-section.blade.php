<!-- Sponsors Section -->
<section id="sponsors" class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-blue-900 mb-4">ĐỐI TÁC VÀ TÀI TRỢ</h2>
      <div class="w-16 h-1 bg-blue-500 mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      @foreach ($conferenceData['sponsors'] as $sponsor)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
          <div class="aspect-w-3 aspect-h-2">
            <img src="{{ $sponsor['logo'] }}" alt="{{ $sponsor['name'] }}" class="w-full h-48 object-cover object-center">
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
