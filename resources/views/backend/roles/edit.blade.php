<x-layouts.backend.dashboard>
    <x-slot:title>
        Darajalar / Tahrirlash / {{ $role->name }}
    </x-slot:title>

    <x-layouts.backend.page-header>
        Darajalar / Tahrirlash / {{ $role->name }}
    </x-layouts.backend.page-header>

    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-success">Tahrirlash</div>
                    <form action="{{ route('roles.update', $role->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="input-1">Nomi</label>
                            <input type="text" name="name" class="form-control" id="input-1" value="{{ $role->name }}" placeholder="Nomini kiritish">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
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
