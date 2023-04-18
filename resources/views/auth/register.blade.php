<x-layouts.auth.auth>

    <x-slot:title>
        Ro'yhatdan o'tish
    </x-slot:title>

    <div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Ro'yhatdan o'tish</div>
		   
          <form action="{{ route('register') }}" method="POST">
             @csrf
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <input type="text" name="name" id="exampleInputUsername" class="form-control input-shadow" value="{{ old('name') }}" placeholder="Login kiriting">
				  <div class="form-control-position"><i class="icon-user"></i></div>
			   </div>
			   @error('name')
				 	<div class="text-danger">{{ $message }}</div>
			 	 @enderror
			  </div>

              <div class="form-group">
                 <div class="position-relative has-icon-right">
                    <input type="email" name="email" id="exampleInputUsername" class="form-control input-shadow"  value="{{ old('email') }}"  placeholder="Email kiriting">
                    <div class="form-control-position"><i class="fa fa-google"></i></div>
                 </div>
				 @error('email')
				 	<div class="text-danger">{{ $message }}</div>
			 	 @enderror
            </div>

			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <input type="password" name="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Parol kiriting">
				  <div class="form-control-position"><i class="icon-lock"></i></div>
			   </div>
			   	 @error('password')
				 	<div class="text-danger">{{ $message }}</div>
			 	 @enderror
			  </div>

              <div class="form-group mb-5">
                 <div class="position-relative has-icon-right">
                    <input type="password" name="password_confirmation" id="exampleInputPassword" class="form-control input-shadow" placeholder="Parolni tasdiqlash">
                    <div class="form-control-position"><i class="icon-lock"></i></div>
                 </div>
				 @error('password_confirmation')
				 	<div class="text-danger">{{ $message }}</div>
			 	 @enderror
            </div>

			 <button type="submit" class="btn btn-light btn-block text-success">Ro'yhatdan o'tish</button>
			 
            </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Ro'yhatdan o'tganmisiz? <a href="{{ route('login') }}" type="submit">Login</a></p>
		  </div>
	     </div>
	
    
</x-layouts.auth.auth>