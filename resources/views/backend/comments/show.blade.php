<x-layouts.backend.dashboard>
    <x-slot:title>
        Izohlar / {{ $comment->name }}
    </x-slot:title>

    <x-layouts.backend.page-header>
        Izohlar / {{ $comment->name }}
    </x-layouts.backend.page-header>

    <div class="col-lg-6">
        <div class="card profile-card-2">
            <div class="card-img-block">
                <div class="message-image"></div>
            </div>
            <div class="card-body">
                <img src="{{ asset('frontend') }}/images/user.png" alt="profile-image" class="profile">
            </div>

            <div class="card-body pt-5">
                <h4 class="card-title">{{ $comment->name }}</h4>
                <hr>
                <p class="card-text">{{ $comment->message }}</p>
                <div class="icon-block">
                </div>
            </div>

            <div class="card-body border-top border-light">
                <div class="media align-items-center">
                    <div>
                        <form action="{{ route('comments.destroy', ['comment' => $comment->id]) }}" method="POST" enctype="multipart/form-data">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-light text-danger">O'chirish</button>
                        </form> 
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-layouts.backend.dashboard>
