<x-layouts.backend.dashboard>
    <x-slot:title>
        Kursga yozilganlar
    </x-slot:title>

    <x-layouts.backend.page-header>
        Kursga yozilganlar
    </x-layouts.backend.page-header>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">Kursga yozilganlar</div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-borderless">
                                <thead class="text-info">
                                    <tr>
                                        <th>T/r</th>
                                        <th>Ism</th>
                                        <th>Kurs</th>
                                        <th>Telefon raqam</th>
                                        <th>Xabar</th>
                                        <th>Qo'shilgan sana</th>
                                        <th>O'chirish</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($joincourses as $joincourse)
                                    <tr>
                                        <td>{{ ($joincourses->currentpage()-1)*$joincourses->perpage() + ($loop->index+1) }}</td>
                                        <td>{{ $joincourse->name }}</td>
                                        <td>{{ $joincourse->category->name }}</td>
                                        <td class="text-info">{{ $joincourse->phone }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="fa fa-eye text-info"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <p class="mr-4 ml-4">{{ $joincourse->message }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $joincourse->created_at }}</td>
                                        <td>
                                            <form action="{{ route('joincourses.destroy', ['joincourse' => $joincourse->id]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-light text-danger">O'chirish</button>
                                            </form>       
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-center">
                        {{ $joincourses->links() }}
                    </div>        
                </div>
            </div>

</x-layouts.backend.dashboard>
