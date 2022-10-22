<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-3 ml-3">
                    {{ __('Create Role') }}
                </h2>
                <hr class="border border-primary border-3 opacity-75">
                <div class="container mt-2">
                    <x-message/>
                    <form action="{{ url('role-store') }}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <h5 class="col-sm-2 mt-2">Role Name</h5>
                            <div class="col-sm-5 ">
                                <input type="text" name="name" class="form-control @error('name') border-danger @enderror">
                            </div>
                            @error('name')
                                <small class="error fs-6 text-danger fw-light">{{ $message }}</small>
                            @enderror
                        </div><br>

                        @if ($permission->count())
                            <div class="row">
                            @foreach ($permission as $items)
                                <div class="col-md">
                                    <div class="form-check">
                                        @if ($items->permissions->count())
                                            <h5>{{ $items->name }}</h5>
                                            @foreach ($items->permissions as $item)
                                                <input value="{{ $item->id }}" name="permission_ids[]" class="form-check-input" type="checkbox" value="" id="flexCheckDefault{{ $item->id }}">
                                                <label class="form-check-label" for="flexCheckDefault{{ $item->id }}">{{ $item->name }}</label><br>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        @endif
                        <br>
                        <a href="{{ url('role') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create Role</button>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
