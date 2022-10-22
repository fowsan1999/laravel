<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-3 ml-3">
                    {{ __('Users') }}
                </h2>
                <hr class="border border-primary border-3 opacity-75">
                <div class="container mt-2">
                    <x-adminuseraddmenu />
                    <br>
                    <x-message/>
                    <a href="{{ url('user-create') }}" class="btn btn-success" style="float: right;"><i class="fa-solid fa-user-plus"></i>  Add New User</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @foreach($users as $user)
                          <tr>
                            <td scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>@if (count($user->roles->pluck('name')->toArray())>0)
                                    {{ implode(",",$user->roles->pluck('name')->toArray()) }}</td>
                                @else
                                    <label class="text-secondary">Role not Assign</label>
                                @endif
                            <td>
                                <div class="inline-flex">
                                    <a href="{{ url('user/'.$user->id) }}"><button class="btn btn-outline-info bt mx-2"><i class="fa-regular fa-pen-to-square"></i></button></a>
                                    <button class="btn btn-outline-danger deleteBtn bt mx-2" value=""><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
