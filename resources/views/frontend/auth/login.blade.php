<x-layouts.frontend.main>
    <x-slot:title>
        Login
    </x-slot:title>


    <x-layouts.frontend.page-header>
        Login
    </x-layouts.frontend.page-header>

    <div class="about">
        <div class="container">
            <h3>Login</h3>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('authenticate') }}" method="POST" class="comment_form">
                        @csrf
                        <div class="row">
                            <div class="col-md-7 input_col mb-4">
                                <div class="form_title"></div>
                                <input type="email" class="comment_input" name="email" placeholder="Email" required="required">
                            </div>
                            <div class="col-md-7 input_col mb-4">
                                <div class="form_title"></div>
                                <input type="password" class="comment_input" name="password" placeholder="Parol" required="required">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="comment_button trans_200">submit</button>
                        </div>
                    </form>
                    <div class="col-md-7">
                        <h4 class="text-center mt-5">Ro'yhatdan o'tmaganmisiz? <a href="{{ route('login') }}" style="color:#23a2f6;"> Ro'yhatdan o'tish</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layouts.frontend.main>
