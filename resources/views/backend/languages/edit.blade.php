<x-layouts.backend.dashboard>
    <x-slot:title>
        Tillar / Tahrirlash / {{ $language->title }}
    </x-slot:title>

    <x-layouts.backend.page-header>
        Tillar / Tahrirlash / {{ $language->title }}
    </x-layouts.backend.page-header>

    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-success">Tahrirlash</div>
                    <form action="{{ route('languages.update', $language->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="input-1">Sarlavha</label>
                            <input type="text" name="title" class="form-control" id="input-1" value="{{ $language->title }}" placeholder="Sarlavha kiritish">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Kategoriya</label>
                            <select name="category_id" class="form-control">
                                <option value="">Kategoriyani tanlang</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                            <textarea name="short_content" class="form-control" rows="4" id="input-4" placeholder="Qisqacha mazmuni">{{ $language->short_content }}</textarea>
                            @error('short_content')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-4">Maqola</label>
                            <textarea name="content" class="form-control" rows="6" id="input-4" placeholder="Maqola">{{ $language->content }}</textarea>
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

        <div class="col-lg-4">
            <div class="card profile-card-2">
                <div class="card-img-block">
                    <img class="img-fluid" src="{{ asset('storage/' . $language->photo) }}" alt="Card image cap">
                </div>
                <div class="card-body pt-5">
                    <h4 class="card-title">{{ $language->title }}</h4>
                    <p class="card-text">{{ $language->short_content }}</p>
                    <hr>
                    <p class="card-text">{{ $language->content }}</p>
                    <div class="icon-block">
                    </div>
                </div>

                <div class="card-body border-top border-light">
                    <div class="media align-items-center">
                        <div>
                            <form action="{{ route('languages.destroy', ['language' => $language->id]) }}" method="POST" enctype="multipart/form-data">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-light text-danger">O'chirish</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-layouts.backend.dashboard>
