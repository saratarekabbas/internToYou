<x-layout>
    <section>
        <br><br><br><br>
        <form method="POST" action="/login">
            @csrf
            <label for="email"> Email</label> <input type="email" name="email" id="email" required>
            @error('email')
            <p class="error-message">{{$message}}</p>
            @enderror
            <label for="password"> Password</label> <input type="pasword" name="password" id="password" required>
            @error('password')
            <p class="error-message">{{$message}}</p>
            @enderror
            <button type="submit">Login</button>
        </form>
    </section>
</x-layout>
