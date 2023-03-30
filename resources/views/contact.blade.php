<x-default-layout>
    <div class="container mt-5">
        <h2>Contact</h2>
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                Votre message a bien été envoyé.
            </div>
        @endif
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
            <ins class="adsbygoogle"
                 style="display:block; text-align:center;"
                 data-ad-layout="in-article"
                 data-ad-format="fluid"
                 data-ad-client="ca-pub-9832408140141934"
                 data-ad-slot="1380738540"></ins>
        </form>
    </div>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("contact-form").submit();
        }
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9832408140141934"
    ></script>

    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</x-default-layout>
