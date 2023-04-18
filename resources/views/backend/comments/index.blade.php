<x-layouts.backend.dashboard>
    <x-slot:title>
       Izohlar
    </x-slot:title>

    <x-layouts.backend.page-header>
        Izohlar
    </x-layouts.backend.page-header>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">Izohlar</div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-borderless">
                                <thead class="text-info">
                                    <tr>
                                        <th>T/r</th>
                                        <th>Ism</th>
                                        <th>Qo'shilgan sana</th>
                                        <th>O'qish</th>
                                        <th>O'chirish</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $comment)
                                    <tr>
                                        <td>{{ ($comments->currentpage()-1)*$comments->perpage() + ($loop->index+1) }}</td>
                                        <td>{{ $comment->name }}</td>
                                        <td>{{ $comment->created_at }}</td>
                                        <td><a href="{{ route('comments.show', ['comment' => $comment->id]) }}" type="submit" class="btn btn-light text-info">O'qish</a></td>
                                        <td>
                                            <form action="{{ route('comments.destroy', ['comment' => $comment->id]) }}" method="POST" enctype="multipart/form-data">
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
                        {{ $comments->links() }}
                    </div>        
                </div>
            </div>

</x-layouts.backend.dashboard>
