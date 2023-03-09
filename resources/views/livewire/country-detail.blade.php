<div>
    <a href="/" class="w-fit flex items-center py-2 px-8" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z" clip-rule="evenodd" />
        </svg>  
        <span class="ml-2 text-sm">Back</span>
    </a href="/">
    {{-- <div class="shadow-md rounded-md w-72 bg-white flex-initial">
        <button class="flex items-center">
            <img class="rounded-t-md w-full h-40 object-contain" src="{{ $country['flag'] }}" alt="germany-flag">
        </button>
        <div class="py-8 px-6">
            <div class="h-20 py-2 flex items-center">
                <h2 class="text-lg font-semibold">{{ $country['name'] }}</h2>
            </div>
            <div class="space-y-1">
                <p>
                    <span class="font-medium">Population:</span>
                    <span>{{ number_format($country['population']) }}</span>
                </p>
                <p>
                    <span class="font-medium">Region:</span>
                    <span>{{ $country['region'] }}</span>
                </p>
                <p>
                    <span class="font-medium">Capital:</span>
                    <span>
                        @if (array_key_exists('capital', $country))
                            {{ $country['capital'] }}
                        @else
                            -
                        @endif
                    </span>
                </p>
            </div>
        </div>
    </div> --}}
    <div class="mt-16 flex items-center gap-32">
        <div class="w-[600px] bg-sky-100">
            <img class="m-auto h-[400px]" src="{{ $country['flag'] }}" alt="">
        </div>
        <div>
            <h2 class="text-2xl font-bold">{{ $country['name'] }}</h2>
            <div class="mt-4 flex gap-28">
                <div class="space-y-2">
                    <p>
                        <span class="font-medium">Native Name:</span>
                        <span>{{ $country['nativeName'] }}</span>
                    </p>
                    <p>
                        <span class="font-medium">Population:</span>
                        <span>{{ number_format($country['population']) }}</span>
                    </p>
                    <p>
                        <span class="font-medium">Region:</span>
                        <span>{{ $country['region'] }}</span>
                    </p>
                    <p>
                        <span class="font-medium">Sub Region:</span>
                        <span>{{ $country['subregion'] }}</span>
                    </p>
                    <p>
                        <span class="font-medium">Capital:</span>
                        <span>
                            @if (array_key_exists('capital', $country))
                                {{ $country['capital'] }}
                            @else
                                -
                            @endif
                        </span>
                    </p>
                </div>
                <div class="space-y-2">
                    <p>
                        <span class="font-medium">Top Level Domain:</span>
                        <span>
                            @foreach ($country['topLevelDomain'] as $domain)
                                {{ $domain }}
                            @endforeach
                        </span>
                    </p>
                    <p>
                        <span class="font-medium">Currencies:</span>
                        <span>
                            @if (array_key_exists('capital', $country))
                                @foreach ($country['currencies'] as $currency)
                                    {{ $currency->name }},
                                @endforeach
                            @else
                                -
                            @endif
                        </span>
                    </p>
                    <p>
                        <span class="font-medium">Languages:</span>
                        <span>
                            @foreach ($country['languages'] as $language)
                                {{ $language->name }},
                            @endforeach
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
