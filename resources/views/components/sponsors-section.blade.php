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

    <!-- Diamond Tier (Standalone) -->
    @if ($sponsorsByType->has('diamond'))
    @php $config = $typeConfigs['diamond']; @endphp
    <div class="mb-12">
      <div class="text-center mb-8">
        <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $config['name'] }}</h3>
        <div class="w-24 h-[2px] mx-auto" style="background-color: #8b5cf6"></div>
      </div>
      <div class="grid grid-cols-2 md:flex md:flex-wrap justify-center items-center gap-6 px-4">
        @foreach ($sponsorsByType['diamond'] as $sponsor)
        <div class="group md:w-auto w-full flex justify-center last:col-span-full last:justify-self-center">
          <div
            class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-200 hover:border-purple-300 p-4 w-48 h-32">
            <div class="flex items-center justify-center h-full">
              <img src="{{ asset($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}"
                class="max-w-full max-h-full object-contain max-h-20">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endif

    <!-- Gold and Silver Tier (Combined Row) -->
    @if ($sponsorsByType->has('gold') || $sponsorsByType->has('silver'))
    <div class="mb-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Gold Column (Left - Higher Priority) -->
        @if ($sponsorsByType->has('gold'))
        <div>
          <div class="text-center mb-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">VÀNG</h3>
            <div class="w-24 h-[2px] mx-auto" style="background-color: #eab308"></div>
          </div>
          <div class="flex flex-wrap justify-center items-center gap-6 px-4">
            @foreach ($sponsorsByType['gold'] as $sponsor)
            <div class="group">
              <div
                class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-200 hover:border-yellow-300 p-4 w-36 h-28">
                <div class="flex items-center justify-center h-full">
                  <img src="{{ asset($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}"
                    class="max-w-full max-h-full object-contain max-h-16">
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endif

        <!-- Silver Column (Right - Lower Priority) -->
        @if ($sponsorsByType->has('silver'))
        <div>
          <div class="text-center mb-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">BẠC</h3>
            <div class="w-24 h-[2px] mx-auto" style="background-color: #6b7280"></div>
          </div>
          <div class="flex flex-wrap justify-center items-center gap-6 px-4">
            @foreach ($sponsorsByType['silver'] as $sponsor)
            <div class="group">
              <div
                class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-200 hover:border-gray-300 p-4 w-32 h-24">
                <div class="flex items-center justify-center h-full">
                  <img src="{{ asset($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}"
                    class="max-w-full max-h-full object-contain max-h-14">
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endif
      </div>
    </div>
    @endif

    <!-- Bronze and Copper Tier (Combined Row) -->
    @if ($sponsorsByType->has('bronze') || $sponsorsByType->has('copper'))
    <div class="mb-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Bronze Column (Left - Higher Priority) -->
        @if ($sponsorsByType->has('bronze'))
        <div>
          <div class="text-center mb-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">ĐỒNG</h3>
            <div class="w-24 h-[2px] mx-auto" style="background-color: #f97316"></div>
          </div>
          <div class="flex flex-wrap justify-center items-end gap-6 px-4">
            @foreach ($sponsorsByType['bronze'] as $sponsor)
            <div class="group">
              <div
                class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-200 hover:border-orange-300 p-4 w-28 h-20">
                <div class="flex items-center justify-center h-full">
                  <img src="{{ asset($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}"
                    class="max-w-full max-h-full object-contain max-h-12">
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endif

        <!-- Copper Column (Right - Lower Priority) -->
        @if ($sponsorsByType->has('copper'))
        <div>
          <div class="text-center mb-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">ĐỒNG TÀI TRỢ</h3>
            <div class="w-24 h-[2px] mx-auto" style="background-color: #22c55e"></div>
          </div>
          <div class="flex flex-wrap justify-center items-end gap-6 px-4">
            @foreach ($sponsorsByType['copper'] as $sponsor)
            <div class="group">
              <div
                class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-200 hover:border-green-300 p-4 w-24 h-16">
                <div class="flex items-end justify-center h-full">
                  <img src="{{ asset($sponsor['logo']) }}" alt="{{ $sponsor['name'] }}"
                    class="max-w-full max-h-full object-contain max-h-10">
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endif
      </div>
    </div>
    @endif
  </div>
</section>