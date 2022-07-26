<x-layout>
    <section>

        <br><br><br><br>

        <form method="POST" action="register">
            @csrf
            <label for="name"> Name</label> <input type="text" name="name" id="name" required>
            <label for="username"> Username</label> <input type="text" name="username" id="username" required>
            <label for="email"> Email</label> <input type="email" name="email" id="email" required>
            <label for="password"> Password</label> <input type="pasword" name="password" id="password" required>
            <button type="submit">Register</button>
        </form>
    </section>
</x-layout>
