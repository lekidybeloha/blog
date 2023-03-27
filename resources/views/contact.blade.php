<x-default-layout>
    <div class="container mt-5">
        <h2>Contact</h2>
        <form id="contact-form" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" placeholder="Message" required></textarea>
            </div>
            <div>
                <button
                    type="submit"
                    class="btn btn-primary g-recaptcha"
                    data-sitekey="6LdZUjYlAAAAABMwWNjDxqdLhx2ryD-avjtoVwIS"
                    data-callback='onSubmit'
                    data-action='submit'
                >Envoyer</button>
            </div>
            @csrf
        </form>
    </div>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("contact-form").submit();
        }
    </script>

</x-default-layout>
