<x-layouts.backend.dashboard>
    <x-slot:title>
        Adminlar
    </x-slot:title>

    <x-layouts.backend.page-header>
        Adminlar 
    </x-layouts.backend.page-header>
<div class="mb-3">
    <a href="{{ route ('users.create') }}" type="submit" class="btn btn-light text-success">Admin qo'shish</a>
</div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">Adminlar</div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-borderless">
                                <thead class="text-info">
                                    <tr>
                                        <th>ID</th>
                                        <th>Login</th>
                                        <th>Email</th>
                                        <th>Darajasi</th>
                                        <th>Qo'shilgan sana</th>
                                        <th>Amal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td><a href="{{ route('users.edit', ['user' => $user->id]) }}">{{ $user->name }}</a></td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <button class="btn btn-light">
                                                @if ($user->role_id > 2)
                                                    <b class="text-info">{{ $user->role_id ? 'Owner' : $user->role_id }}</b>
                                                @elseif ($user->role_id > 1) 
                                                    <b class="text-success">{{ $user->role_id ? 'Admin' : $user->role_id }}</b>
                                                @elseif ($user->role_id == 1) 
                                                    <b class="text-warning">{{ $user->role_id ? 'User' : $user->role_id }}</b>
                                                @endif
                                            </button>
                                        </td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="fa fa-ellipsis-v text-info"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item text-warning" href="{{ route('users.edit', ['user' => $user->id]) }}"><i class="fa fa-pencil mr-1"></i> Tahrirlash</a>
                                                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn text-danger logout ml-2"><i class="fa fa-trash-o"></i> O'chirish</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-center">
                        {{ $users->links() }}
                    </div>        
                </div>
            </div>

</x-layouts.backend.dashboard>
