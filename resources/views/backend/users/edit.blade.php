<x-layouts.backend.dashboard>
    <x-slot:title>
        Adminlar / Tahrirlash / {{ $user->name }}
    </x-slot:title>

    <x-layouts.backend.page-header>
        Adminlar / Tahrirlash / {{ $user->name }}
    </x-layouts.backend.page-header>

    <div class="row mt-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-success">Tahrirlash</div>
                    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="input-1">Login</label>
                            <input type="text" name="name" class="form-control" id="input-1" value="{{ $user->name }}" placeholder="Login kiritish">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Email</label>
                            <input type="email" name="email" class="form-control" id="input-1" value="{{ $user->email }}" placeholder="Email kiritish">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Parol</label>
                            <input type="password" name="password" class="form-control" id="input-1" placeholder="Parol kiritish">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Parolni tasdiqlang</label>
                            <input type="password" name="password_confirmation" class="form-control" id="input-1" placeholder="Parolni tasdiqlang">
                            @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Daraja</label>
                            <select name="role_id" class="form-control">
                                @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-light px-5 text-success"> Saqlash</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.dashboard>
