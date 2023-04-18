<x-layouts.backend.dashboard>
    <x-slot:title>
        Videolar / Tahrirlash / {{ $video->title }}
    </x-slot:title>

    <x-layouts.backend.page-header>
        Videolar / Tahrirlash / {{ $video->title }}
    </x-layouts.backend.page-header>

    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-success">Post qo'shish</div>
                    <form action="{{ route('videos.update', $video->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="input-1">Sarlavha</label>
                            <input type="text" name="title" class="form-control" id="input-1"
                                value="{{ $video->title }}" placeholder="Sarlavha kiritish">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-1">Video</label>
                            <input type="file" name="video" class="form-control" id="input-1">
                            @error('video')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-4">Maqola</label>
                            <textarea name="content" class="form-control" rows="6" id="input-4" placeholder="Maqola">{{ $video->content }}</textarea>
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
