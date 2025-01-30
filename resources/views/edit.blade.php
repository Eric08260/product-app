<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-4">
                        <label for="name">Name of Product</label>
                        <input type="text" name="name" id="name" placeholder="Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ $product->name }}">
                        @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-4">
                        <label for="name">Description</label>
                        <textarea name="description" id="description" placeholder="Description" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                            {{ $product->description }}
                        </textarea>
                        @error('description')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-4">
                        <label for="name">Price</label>
                        <input type="text" name="price" id="price" placeholder="Price" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ $product->price }}">
                        @error('price')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-4">
                        <label for="name">Stock</label>
                        <input type="text" name="stock" id="stock" placeholder="Stock" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ $product->stock }}">
                        @error('stock')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-4">
                        <label for="name">Status</label>
                        <select name="status" id="status" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                            <option value="" disabled selected>Select status</option>
                            <option value="available" {{$product->status === 'available' ? "selected" : ""  }}>Available</option>
                            <option value="out-of-stock" {{$product->status === 'out-of-stock' ? "selected" : ""  }}>Out of Stock</option>
                            <option value="expired" {{$product->status === 'expired' ? "selected" : ""  }}>Expired</option>
                        </select>
                    </div>


                    <div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                          Updated Product   
                        </button>
                    </div>

                  </form>
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
