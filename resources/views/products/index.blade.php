<x-layout>
    <x-slot:heading>
        Product Listing
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($products as $product)
        <a>
            <a href="/products/{{$product['id']}}" class=" block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{$product->country_producer}}</div>
            <div>
                <strong>{{ $product['title'] }}:</strong>costs{{$product['price']}}
            </div>
            </a>
        </a>
        @endforeach
    </div>
</x-layout>