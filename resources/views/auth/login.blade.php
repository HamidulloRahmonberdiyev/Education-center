<x-layouts.auth.auth>

    <x-slot:title>
        Login
    </x-slot:title>

    <div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Login</div>
		    
          <form action="{{ route('login') }}" method="POST">
			  @csrf
                <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <input type="email" name="email" id="exampleInputUsername" class="form-control input-shadow" value="{{ old('email') }}" placeholder="Login">
				  <div class="form-control-position"><i class="icon-user"></i></div>
			   </div>
			   		@error('email')
                        <div class="text-danger">{{ $message }}</div>
                	@enderror
			  </div>

			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <input type="password" name="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Parol">
				  <div class="form-control-position"><i class="icon-lock"></i></div>
			   </div>
			   		@error('password')
                        <div class="text-danger">{{ $message }}</div>
                	@enderror
			  </div>

			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} checked="" />
                <label for="user-checkbox">Eslab qolish</label>
			  </div>
			 </div>
			</div>

			 <button type="submit" class="btn btn-light btn-block text-success">Login</button>
			 
            </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Ro'yhatdan o'tmaganmisiz? <a href="{{ route('register') }}" type="submit">Ro'yhatdan o'tish</a></p>
		  </div>
	     </div>
	
    
</x-layouts.auth.auth>

