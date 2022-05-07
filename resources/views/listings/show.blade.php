<x-layout>
    
@include('partials._search')

<main>
    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
<div
    class="flex flex-col items-center justify-center text-center">
    <img
        class="w-48 mr-6 mb-6"   
        src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />

    <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
    <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>

      {{-- tag component --}}
      <x-listing-tags :tagCsv="$listing->tags" />

    <div class="text-lg my-4">
        <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
    </div>
    <div class="border border-gray-200 w-full mb-6"></div>
    <div>
        <h3 class="text-3xl font-bold mb-4">
            Job Description
        </h3>
        <div class="text-lg space-y-6">
           <p>{{ $listing->description }}</p>
            <a
                href="mailto:{{ $listing->email }}"
                class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-envelope"></i> Contact Employer</a>

            <a href="{{ $listing->website }}" target="_blank"
                class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i> Visit Website</a>
        </div>
    </div>
</div>
<div class="block bg-laravel text-white mt-6 py-2 rounded-xl text-center">
    <a href="{{ route('listings.edit', $listing) }}">Edit</a>
    
    
</div>
<div  class="block bg-black text-white py-2 rounded-xl text-center mt-3">
    <form action="{{ route('listings.delete', $listing) }}" method="post">
        @csrf 
        @method("DELETE")
        <button>
         Delete
        </button>
    </form>
</div>
 
</div>
  
</div>
</main>

</x-layout>