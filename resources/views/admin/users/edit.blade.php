<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-3 ml-3">
                    {{ __('Edit User') }}
                </h2>
                <hr class="border border-primary border-3 opacity-75">
                <div class="container mt-2">
                    <x-message/>
                    <form action="{{ url('user/'.$users->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" value="{{ $users->email }}" name="email" readonly class="form-control @error('email') border-danger @enderror">
                            @error('email')
                                <small class="error fs-6 text-danger fw-light">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="{{ $users->name }}" class="form-control @error('name') border-danger @enderror">
                            @error('name')
                                <small class="error fs-6 text-danger fw-light">{{ $message }}</small>
                            @enderror
                        </div>
                        <a href="{{ url('user') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update User</button>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
