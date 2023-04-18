<x-layouts.backend.dashboard>
    <x-slot:title>
        Yangiliklar
    </x-slot:title>

    <x-layouts.backend.page-header>
        Yangiliklar 
    </x-layouts.backend.page-header>
<div class="mb-3">
    <a href="{{ route ('news.create') }}" type="submit" class="btn btn-light text-success">Post qo'shish</a>
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
                                    @foreach ($news as $new)
                                    <tr>
                                        <td>{{ ($news->currentpage()-1)*$news->perpage() + ($loop->index+1) }}</td>
                                        <td><a href="{{ route('news.edit', $new->id) }}">{{ $new->title }}</a></td>
                                        <td><img src="{{ asset('storage/' . $new->photo) }}" class="product-img" alt="product img"></td>
                                        <td>{{ $new->created_at }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="fa fa-ellipsis-v text-info"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item text-warning" href="{{ route('news.edit', $new->id) }}"><i class="fa fa-pencil mr-1"></i> Tahrirlash</a>
                                                    <form action="{{ route('news.destroy',  $new->id) }}" method="POST" enctype="multipart/form-data">
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
                        {{ $news->links() }}
                    </div>        
                </div>
            </div>

</x-layouts.backend.dashboard>
