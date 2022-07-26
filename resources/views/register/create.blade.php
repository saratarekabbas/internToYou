<x-layout>
    <section>

        <br><br><br><br>

        <form method="POST" action="register">
            @csrf
            <label for="name"> Name</label> <input type="text" name="name" id="name" required>
            @error('name')
            <p class="error-message">{{$message}}</p>
            @enderror
            <label for="username"> Username</label> <input type="text" name="username" id="username" required>
            @error('username')
            <p class="error-message">{{$message}}</p>
            @enderror
            <label for="email"> Email</label> <input type="email" name="email" id="email" required>
            @error('email')
            <p class="error-message">{{$message}}</p>
            @enderror
            <label for="password"> Password</label> <input type="pasword" name="password" id="password" required>
            @error('password')
            <p class="error-message">{{$message}}</p>
            @enderror
            <button type="submit">Register</button>

        </form>
    </section>
</x-layout>
