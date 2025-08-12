<x-layout>
    <x-slot:heading>
        Product
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$product->title}}</h2>
    <p>
        This product costs {{$product->price}} and was produced in {{$product->country_producer}}.
    </p>
    <p class="mt-6">
        <x-button href="/products/{{$product->id}}/edit">Edit Product</x-button>
    </p>
</x-layout>