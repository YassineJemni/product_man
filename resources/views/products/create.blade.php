<x-layout>
    <x-slot:heading>
        Create Product
    </x-slot:heading>
    <form method="POST" action="/products">
        @csrf 
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a New Product</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Please provide the product details.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="title" name="title" placeholder="Product Title" required/>
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="price">Price</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="price" name="price" placeholder="$0.00" required/>
                            <x-form-error name="price"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="country_producer">Country Producer</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="country_producer" name="country_producer" placeholder="Country" required/>
                            <x-form-error name="country_producer"/>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/products" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>