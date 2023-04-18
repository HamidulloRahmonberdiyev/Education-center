<x-layouts.backend.dashboard>
    <x-slot:title>
        Postlar
    </x-slot:title>

    <x-layouts.backend.page-header>
        Postlar 
    </x-layouts.backend.page-header>
<div class="mb-3">
    <a href="{{ route ('posts.create') }}" type="submit" class="btn btn-light text-success">Post qo'shish</a>
</div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">Postlar</div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-borderless">
                                <thead class="text-info">
                                    <tr>
                                        <th>T/r</th>
                                        <th>Sarlavha</th>
                                        <th>Rasm</th>
                                        <th>Qo'shilgan sana</th>
                                        <th>Amal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ ($posts->currentpage()-1)*$posts->perpage() + ($loop->index+1) }}</td>
                                        <td><a href="{{ route('posts.edit', ['post' => $post->id]) }}">{{ $post->title }}</a></td>
                                        <td><img src="{{ asset('storage/' . $post->photo) }}" class="product-img" alt="product img"></td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="fa fa-ellipsis-v text-info"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item text-warning" href="{{ route('posts.edit', ['post' => $post->id]) }}"><i class="fa fa-pencil mr-1"></i> Tahrirlash</a>
                                                    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
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
                        {{ $posts->links() }}
                    </div>        
                </div>
            </div>

</x-layouts.backend.dashboard>
