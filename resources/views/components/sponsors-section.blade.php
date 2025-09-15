<!-- Sponsors Section -->
<section id="sponsors" class="py-16 bg-white">
  <div class="container mx-auto">
    <!-- Header -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">ĐỐI TÁC VÀ TÀI TRỢ</h2>
      <div class="w-16 h-1 bg-green-500 mx-auto"></div>
    </div>

    @php
      $sponsorsByType = collect($conferenceData['sponsors'])->groupBy('type');
      $typeConfigs = [
          'diamond' => ['name' => 'KIM CƯƠNG', 'color' => 'purple', 'size' => 'xl'],
          'gold' => ['name' => 'VÀNG', 'color' => 'yellow', 'size' => 'lg'],
          'silver' => ['name' => 'BẠC', 'color' => 'gray', 'size' => 'md'],
          'bronze' => ['name' => 'ĐỒNG', 'color' => 'orange', 'size' => 'sm'],
          'copper' => ['name' => 'ĐỒNG TÀI TRỢ', 'color' => 'green', 'size' => 'xs'],
      ];
    @endphp

    @foreach (['diamond', 'gold', 'silver', 'bronze', 'copper'] as $type)
      @if ($sponsorsByType->has($type))
        @php $config = $typeConfigs[$type]; @endphp

        <!-- Tier Header -->
        <div class="mb-12">
          <div class="text-center mb-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $config['name'] }}</h3>
            <div class="w-24 h-[2px] mx-auto"
              style="background-color: @switch($config['color'])
              @case('purple') #8b5cf6 @break
              @case('yellow') #eab308 @break
              @case('gray') #6b7280 @break
              @case('orange') #f97316 @break
              @case('green') #22c55e @break
            @endswitch">
            </div>
          </div>

          <!-- Sponsors Grid -->
          <div class="flex flex-wrap justify-center items-center gap-6 px-4">

            @foreach ($sponsorsByType[$type] as $sponsor)
              <div class="group">
                <!-- Sponsor Card -->
                <div
                  class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-200 hover:border-{{ $config['color'] }}-300 p-4
                  @switch($config['size'])
                    @case('xl') w-48 h-32 @break
                    @case('lg') w-36 h-28 @break
                    @case('md') w-32 h-24 @break
                    @case('sm') w-28 h-20 @break
                    @case('xs') w-24 h-16 @break
                  @endswitch">

                  <!-- Logo Container -->
                  <div class="flex items-center justify-center h-full">
                    <img src="{{ asset($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}"
                      class="max-w-full max-h-full object-contain
                           @switch($config['size'])
                             @case('xl') max-h-20 @break
                             @case('lg') max-h-16 @break
                             @case('md') max-h-14 @break
                             @case('sm') max-h-12 @break
                             @case('xs') max-h-10 @break
                           @endswitch">
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endif
    @endforeach
  </div>
</section>
