<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-3 ml-3">
                    {{ __('Edit Product') }}
                </h2>
                <hr class="border border-primary border-3 opacity-75">
                <div class="container mt-2">
                    <form action="{{ url('product/' .$products->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="pid">Product ID</label></br>
                            <input type="text" value="{{ $products->id }}" readonly class="form-control" id="pid" name="product_name">
                        </div>
                        <div class="mb-3">
                            <label for="name">Product Name</label></br>
                            <input type="text" value="{{ $products->product_name }}" class="form-control" id="name" name="product_name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Discription</label>
                            <textarea class="form-control"id="editor" name="product_discription" rows="4">{!! $products->product_discription !!}</textarea>
                        </div>

                        <a href="{{ url('product') }}" class="btn btn-secondary">Cancel</a>
                        <input type="submit" class="btn btn-success" value="Update Product"></br>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
