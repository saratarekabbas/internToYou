<x-layout>
{{--    <section>--}}
{{--        <form method="POST" action="/login">--}}
{{--            @csrf--}}
{{--            <label for="email"> Email</label> <input type="email" name="email" id="email" required>--}}
{{--            @error('email')--}}
{{--            <p class="error-message">{{$message}}</p>--}}
{{--            @enderror--}}
{{--            <label for="password"> Password</label> <input type="password" name="password" id="password" required>--}}
{{--            @error('password')--}}
{{--            <p class="error-message">{{$message}}</p>--}}
{{--            @enderror--}}
{{--            <button type="submit">Login</button>--}}
{{--        </form>--}}
{{--    </section>--}}



    <div class="login-container">
        <div class="login-screen">
            <div class="login-screen__content">
                <form method="POST" action="/login" class="login">
                    @csrf
                    <div class="login__field">
                        <input class="login__input" placeholder="Email" type="email" name="email" id="email" required>
                        @error('email')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="login__field">
                        <input type="password" class="login__input" placeholder="Password" name="password" id="password" required>
                        @error('password')
                        <p class="error-message">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="button login__submit">
                        <span class="button__text">Log In Now</span>
                    </button>
                </form>
            </div>
            <div class="login-screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>

</x-layout>
