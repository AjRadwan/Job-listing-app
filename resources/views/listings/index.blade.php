<x-layout>
 
@include('partials._hero')
@include('partials._search')

 

@foreach($listings as $listing)

 <x-listing-card :listing="$listing" />

@endforeach
 
 <div class="mt-6 p-4">
    {{ $listings->links() }}
 </div>
</x-layout >