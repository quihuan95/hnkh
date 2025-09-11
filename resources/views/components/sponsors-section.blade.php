<!-- Sponsors Section -->
<section id="sponsors" class="py-16 bg-green-50">
  <div class="container mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">ĐỐI TÁC VÀ TÀI TRỢ</h2>
      <div class="w-16 h-1 bg-green-500 mx-auto"></div>
    </div>

    @php
      $sponsorsByType = collect($conferenceData['sponsors'])->groupBy('type');
    @endphp

    @foreach (['diamond', 'gold', 'silver', 'bronze', 'copper'] as $type)
      @if ($sponsorsByType->has($type))
        <div class="mb-4"></div>
        <div class="flex flex-wrap justify-center items-center gap-4 px-4 container mx-auto">
          @foreach ($sponsorsByType[$type] as $sponsor)
            <div
              class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl hover:scale-105 transition-all duration-300 border-2 flex flex-col items-center justify-center
                @switch($type)
                  @case('diamond') border-purple-300 w-48 h-fit @break
                  @case('gold') border-yellow-300 w-40 h-fit @break
                  @case('silver') border-gray-300 w-36 h-fit @break
                  @case('bronze') border-orange-300 w-32 h-fit @break
                  @case('copper') border-green-300 w-28 h-fit @break
                @endswitch">
              <div class="flex items-center justify-center w-full">
                <img src="{{ asset($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}" class="object-contain object-center p-2"
                  style="
                     @switch($type)
                       @case('diamond') height: 120px; @break
                       @case('gold') height: 100px; @break
                       @case('silver') height: 80px; @break
                       @case('bronze') height: 70px; @break
                       @case('copper') height: 60px; @break
                     @endswitch">
              </div>
            </div>
          @endforeach
        </div>
  </div>
  @endif
  @endforeach
  </div>
</section>
