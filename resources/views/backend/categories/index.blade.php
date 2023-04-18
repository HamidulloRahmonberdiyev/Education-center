<x-layouts.backend.dashboard>
    <x-slot:title>
        Kategoriyalar
    </x-slot:title>

    <x-layouts.backend.page-header>
        Kategoriyalar 
    </x-layouts.backend.page-header> 
<div class="mb-3">
    <a href="{{ route ('categories.create') }}" type="submit" class="btn btn-light text-success">Kategoriya qo'shish</a>
</div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">Kategoriyalar</div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-borderless">
                                <thead class="text-info">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nomi</th>
                                        <th>Qo'shilgan sana</th>
                                        <th>Amal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ ($categories->currentpage()-1)*$categories->perpage() + ($loop->index+1) }}</td>
                                        <td><a href="{{ route('categories.edit', ['category' => $category->id]) }}">{{ $category->name }}</a></td>
                                        <td>{{ $category->created_at }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="fa fa-ellipsis-v text-info"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item text-warning" href="{{ route('categories.edit', ['category' => $category->id]) }}"><i class="fa fa-pencil mr-1"></i> Tahrirlash</a>
                                                    <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST" enctype="multipart/form-data">
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
                        {{ $categories->links() }}
                    </div>        
                </div>
            </div>

</x-layouts.backend.dashboard>
