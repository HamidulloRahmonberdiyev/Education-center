<x-layouts.backend.dashboard>
    <x-slot:title>
        Ustozlar / Ustoz qo'shish
    </x-slot:title>

    <x-layouts.backend.page-header>
         Ustozlar / Ustoz qo'shish
    </x-layouts.backend.page-header>

<div class="row mt-3">
    <div class="col-lg-8">
       <div class="card">
         <div class="card-body">
         <div class="card-title text-success">Ustoz qo'shish</div>
          <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

        <div class="form-group">
            <label for="input-1">F.I.SH</label>
            <input type="text" name="name" class="form-control" id="input-1" value="{{ old('name') }}" placeholder="F.I.Sh kiritish">
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
            <input type="text" name="title" class="form-control" id="input-2" value="{{ old('title') }}" placeholder="Sohasini kiritish">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="input-4">Ma'lumot</label>
            <textarea name="content" class="form-control" rows="6" id="input-4" placeholder="Ma'lumot...">{{ old('content') }}</textarea>
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
  </div>

</x-layouts.backend.dashboard>