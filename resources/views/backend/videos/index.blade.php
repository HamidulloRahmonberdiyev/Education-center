<x-layouts.backend.dashboard>
    <x-slot:title>
        Videolar
    </x-slot:title>

    <x-layouts.backend.page-header>
        Videolar 
    </x-layouts.backend.page-header>
<div class="mb-3">
    <a href="{{ route ('videos.create') }}" type="submit" class="btn btn-light text-success">Post qo'shish</a>
</div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">Videolar</div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-borderless">
                                <thead class="text-info">
                                    <tr>
                                        <th>T/r</th>
                                        <th>Sarlavha</th>
                                        <th>Video</th>
                                        <th>Qo'shilgan sana</th>
                                        <th>Amal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($videos as $video)
                                    <tr>
                                        <td>{{ ($videos->currentpage()-1)*$videos->perpage() + ($loop->index+1) }}</td>
                                        <td><a href="{{ route('videos.edit', ['video' => $video->id]) }}">{{ $video->title }}</a></td>
                                        <td><video src="{{ asset('storage/' . $video->video) }}" class="product-video" alt="product img"></td>
                                        <td>{{ $video->created_at }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="fa fa-ellipsis-v text-info"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item text-warning" href="{{ route('videos.edit', ['video' => $video->id]) }}"><i class="fa fa-pencil mr-1"></i> Tahrirlash</a>
                                                    <form action="{{ route('videos.destroy', ['video' => $video->id]) }}" method="POST" enctype="multipart/form-data">
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
                        {{ $videos->links() }}
                    </div>        
                </div>
            </div>

</x-layouts.backend.dashboard>
