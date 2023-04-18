<x-layouts.backend.dashboard>
    <x-slot:title>
        Kategoriyalar / Tahrirlash / {{ $category->name }}
    </x-slot:title>

    <x-layouts.backend.page-header>
        Kategoriyalar / Tahrirlash / {{ $category->name }}
    </x-layouts.backend.page-header>

    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-success">Tahrirlash</div>
                    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="input-1">Nomi</label>
                            <input type="text" name="name" class="form-control" id="input-1" value="{{ $category->name }}" placeholder="Nomini kiritish">
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
