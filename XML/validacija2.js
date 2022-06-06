$(function() {

    $("form[name='registracija']").validate({
        errorClass: "error",
        rules: {
            ime: {
                required: true,

            },
            prezime: {
                required: true,

            },
            email: {
                required: true,

            },
            username: {
                required: true,
                minlength: 6,

            },
            password: {
                required: true,
                minlength: 5,
                maxlength: 10,

            },
        },

        messages: {
            ime: {
                required: "Potrebno je upisati Vaše ime",
            },
            prezime: {
                required: "Potrebno je upisati Vaše prezime",
            },
            email: {
                required: "Potrebno je upisati email",
            },
            username: {
                required: "Potrebno je upisati korisničko ime",
                minlength: "Korisničko ime nesmije biti manje od 6 znakova",
            },
            password: {
                required: "Potrebno je upisati lozinku",
                minlength: "Lozinka nesmije biti manja od 5 znakova",
                maxlength: "Lozinka nesmije biti veća od 10 znakova"
            },
        },

        submitHandler: function(form) {
            form.submit();
        }
    });
});