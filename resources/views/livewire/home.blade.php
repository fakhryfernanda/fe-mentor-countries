<div>
    <div class="flex items-start justify-between">
        <div class="bg-white shadow-md">
            {{-- <label for="country">Search for a country</label> --}}
            <div class="py-4 px-6 w-[400px] flex items-center">
                <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                    </svg>                                            
                </span>
                <input class="w-full focus:outline-none text-sm" type="text" placeholder="Search for a country...">
            </div>
        </div>

        <div>
            {{-- <label for="region">Filter by Region</label> --}}
            <div class="w-[200px] bg-white space-y-2 text-sm">
                <div class="py-4 px-6 shadow-md rounded-md flex items-center justify-between">
                    <span>Filter by Region</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>                          
                    </span>
                </div>
                <div class="py-4 px-6 rounded-md shadow-md space-y-2">
                    <p>Africa</p>
                    <p>America</p>
                    <p>Asia</p>
                    <p>Europe</p>
                    <p>Oceania</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-20 flex flex-wrap justify-center gap-x-12 gap-y-12">
        @foreach($countries as $country)
            <div class="shadow-md rounded-md w-72 bg-white flex-initial">
                <div class="flex items-center">
                    <img class="rounded-t-md w-full h-40 object-contain" src="{{ $country->flags->svg }}" alt="germany-flag">
                </div>
                <div class="py-8 px-6">
                    <div class="h-20 py-2 flex items-center">
                        <h2 class="text-lg font-semibold">{{ $country->name }}</h2>
                    </div>
                    <div class="space-y-1">
                        <p>
                            <span class="font-medium">Population:</span>
                            <span>{{ number_format($country->population) }}</span>
                        </p>
                        <p>
                            <span class="font-medium">Region:</span>
                            <span>{{ $country->region }}</span>
                        </p>
                        <p>
                            <span class="font-medium">Capital:</span>
                            <span>
                                @if (property_exists($country, 'capital'))
                                    {{ $country->capital }}
                                @else
                                    -
                                @endif
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
