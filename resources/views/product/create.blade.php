<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-3 ml-3">
                    {{ __('Add Product') }}
                </h2>
                <hr class="border border-primary border-3 opacity-75">
                <div class="container mt-2">
                    <form action="{{url('product-store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Product Name</label></br>
                            <input type="text" class="form-control" id="name" name="product_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Discription</label>
                            <textarea class="form-control" id="editor" name="product_discription" rows="4"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" name="product_image" id="formFile">
                        </div>

                        <a href="{{ url('product') }}" class="btn btn-secondary">Cancel</a>
                        <input type="submit" class="btn btn-success" value="Add Product"></br>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
