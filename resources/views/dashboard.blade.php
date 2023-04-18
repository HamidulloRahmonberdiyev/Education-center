<x-layouts.backend.dashboard>

    <x-slot:title>
        Admin Panel
    </x-slot:title>


    <div class="card mt-3">
        <div class="card-content">
            <div class="row row-group m-0">
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <a href="{{ route('comments.index') }}">
                    <div class="card-body">
                        <h4 class="text-white mb-0">{{ $comments->count() }} ta <span class="float-right"><i class="fa fa-comments" style="color:rgb(221, 232, 8)"></i></span></h4>
                        <div class="progress my-3" style="height:15px;">
                            <div class="progress-bar" style="width:60%;background:rgb(221, 232, 8)"></div>
                        </div>
                        <h5 class="mb-0 text-white">Izohlar<span class="float-right">60%</span></h5>
                    </div></a>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <a href="{{ route('courses.index') }}">
                    <div class="card-body">
                        <h4 class="text-white mb-0">{{ $courses->count() }} ta<span class="float-right"><i class="fa fa-institution" style="color:rgb(6, 114, 231)"></i></span></h4>
                        <div class="progress my-3" style="height:15px;">
                            <div class="progress-bar" style="width:53%;background:rgb(6, 114, 231)"></div>
                        </div>
                        <h5 class="mb-0 text-white">Kurslar<span class="float-right">53%</span></h5>
                    </div></a>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <a href="{{ route('languages.index') }}">
                    <div class="card-body">
                        <h4 class="text-white mb-0">{{ $languages->count() }} ta <span class="float-right"><i class="fa fa-flag" style="color:rgb(160, 7, 174)"></i></span></h4>
                        <div class="progress my-3" style="height:15px;">
                            <div class="progress-bar" style="width:46%;background:rgb(160, 7, 174)"></div>
                        </div>
                        <h5 class="mb-0 text-white">Tillar<span class="float-right">46%</span></h5>
                    </div></a>
                </div>
                <div class="col-12 col-lg-6 col-xl-3 border-light">
                    <a href="{{ route('joincourses.index') }}">
                    <div class="card-body">
                        <h4 class="text-white mb-0">{{ $joincourses->count() }} ta <span class="float-right"><i class="fa fa-users"  style="color:rgb(21, 174, 7)"></i></span></h4>
                        <div class="progress my-3" style="height:15px">
                            <div class="progress-bar" style="width:75%;background:rgb(21, 174, 7)"></div>
                        </div>
                        <h5 class="mb-0 text-white">Kursga yozilganlar<span class="float-right">75%</span></h5>
                    </div></a>
                </div>
            </div>
        </div>
    </div>

</x-layouts.backend.dashboard>
