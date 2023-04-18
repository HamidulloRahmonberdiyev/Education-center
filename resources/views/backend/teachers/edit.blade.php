<x-layouts.backend.dashboard>
    <x-slot:title>
        Ustozlar / Tahrirlash / {{ $teacher->name }}
    </x-slot:title>

    <x-layouts.backend.page-header>
        Ustozlar / Tahrirlash / {{ $teacher->name }} 
    </x-layouts.backend.page-header>

<div class="row mt-3">
    <div class="col-lg-8">
       <div class="card">
         <div class="card-body">
         <div class="card-title text-success">Tahrirlash</div>
          <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

        <div class="form-group">
            <label for="input-1">F.I.SH</label>
            <input type="text" name="name" class="form-control" id="input-1" value="{{ $teacher->name }}" placeholder="F.I.Sh kiritish">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="input-1">Rasm</label>
            <input type="file" name="photo" class="form-control" id="input-1">
            @error('photo')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="input-2">Sohasi</label>
            <input type="text" name="title" class="form-control" id="input-2" value="{{ $teacher->title }}" placeholder="Sohasini kiritish">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="input-4">Ma'lumot</label>
            <textarea name="content" class="form-control" rows="6" id="input-4" placeholder="Ma'lumot...">{{ $teacher->content }}</textarea>
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

    <div class="col-lg-4">
        <div class="card profile-card-2">
         <div class="card-img-block">
             <img class="img-fluid" src="{{ asset('storage/' . $teacher->photo) }}" alt="Card image cap">
         </div>
         <div class="card-body pt-5">
             <h4 class="card-title">{{ $teacher->name }}</h4>
             <h5 class="card-title">{{ $teacher->title }}</h5>
             <p class="card-text">{{ $teacher->content }}</p>
             <div class="icon-block">
             </div>
         </div>

         <div class="card-body border-top border-light">
              <div class="media align-items-center">
                <div>
                    <form action="{{ route('teachers.destroy', ['teacher' => $teacher->id]) }}" method="POST" enctype="multipart/form-data">
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