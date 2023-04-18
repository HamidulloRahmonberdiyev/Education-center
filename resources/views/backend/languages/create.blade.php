<x-layouts.backend.dashboard>
    <x-slot:title>
        Tillar / Post qo'shish
    </x-slot:title>

    <x-layouts.backend.page-header>
        Tillar / Post qo'shish
    </x-layouts.backend.page-header>

    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-success">Post qo'shish</div>
                    <form action="{{ route('languages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="input-1">Sarlavha</label>
                            <input type="text" name="title" class="form-control" id="input-1" value="{{ old('title') }}" placeholder="Sarlavha kiritish">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Kategoriya</label>
                            <select name="category_id" class="form-control">
                                <option value="">Kategoriyani tanlang</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name  }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Rasm</label>
                            <input type="file" name="photo" class="form-control" id="input-1">
                            @error('photo')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-4">Qisqacha mazmuni</label>
                            <textarea name="short_content" class="form-control" rows="4" id="input-4" placeholder="Qisqacha mazmuni">{{ old('short_content') }}</textarea>
                            @error('short_content')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-4">Maqola</label>
                            <textarea name="content" class="form-control" rows="6" id="input-4" placeholder="Maqola">{{ old('content') }}</textarea>
                            @error('content')
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
