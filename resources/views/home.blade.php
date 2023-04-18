<x-layouts.backend.home>

    <x-slot:title>
        Home Page
    </x-slot:title>

<div class="main-content"><br><br>
    <div class="card mt-5" style="padding:5%">
        <div class="content">
            <div class="row row-group m-0">
                <div class="col-12 text-center">
                    @if (Auth::user()->role_id > 1)
                         <div class="alert alert-success">
                            <h4>Welcome to admin panel {{ Auth::user()->name }}.</h4>
                         </div>
                    @else
                        <div class="alert alert-danger">
                            <h4>You are not admin!</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

</x-layouts.backend.home>
