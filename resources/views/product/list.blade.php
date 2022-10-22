<x-app-layout>
    <x-product-delete />
    <x-slot name="header">

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-3 ml-3">
                    {{ __('Products') }}
                </h2>
                <hr class="border border-primary border-3 opacity-75">
                <div class="container mt-2">
                    <x-message/>
                    @can ('Product Create')
                        <a href="{{ url('product-create') }}" class="btn btn-success" style="float: right;"><i class="fa-solid fa-circle-plus"></i> Add New Product</a><br>
                    @endcan
                    <div class="table-responsive mt-3">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Discription</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach($products as $item)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td><img src="{{ url('images/'.$item->product_image) }}" style="width: 150px;"></td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{!! $item->product_discription !!}</td>
                                        <td>
                                            @can ('Product Edit')
                                            <a href="{{ url('product/' . $item->id . '/edit') }}"><button class="btn btn-outline-info bt mx-2"><i class="fa-regular fa-pen-to-square"></i></button></a>
                                            @endcan
                                            @can('Product Delete')
                                            <button class="btn btn-outline-danger bt mx-2 deleteBtn" value="{{$item->id}}"><i class="fa-solid fa-trash"></i></button>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
