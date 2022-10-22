<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-3 ml-3">
                    {{ __('Assign Role To User') }}
                </h2>
                <hr class="border border-primary border-3 opacity-75">
                <x-adminuseraddmenu />
                <br>
                <div class="container mt-2">
                    <x-message/>
                    <form action="{{ url('assign-role/store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Select User</label>
                            <select class="form-select" name="user_id" aria-label="Default select example">
                                <option selected>Selct the User</option>
                                @if ($users->count()>0)
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select Role</label>
                            <select class="form-select" name="role_id" aria-label="Default select example">
                                <option selected>Select the Role</option>
                                @if ($roles->count()>0)
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <a href="{{ url('user') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create User</button>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
