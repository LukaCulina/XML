$(function() {

    $("form[name='promjena']").validate({
        errorClass: "error",
        rules: {

            old_password: {
                required: true,

            },
            new_password: {
                required: true,
                minlength: 5,
                maxlength: 10,

            },
            con_password: {
                required: true,
                equalTo: "#new",
            }
        },

        messages: {
            old_password: {
                required: "Potrebno je upisati trenutačnu lozinku",
            },
            new_password: {
                required: "Potrebno je upisati lozinku",
                minlength: "Lozinka nesmije biti manja od 5 znakova",
                maxlength: "Lozinka nesmije biti veća od 10 znakova"
            },
            con_password: {
                required: "Potrebno je ponoviti lozinku",
                equalTo: "Lozinke moraju biti iste"
            },
        },

        submitHandler: function(form) {
            form.submit();
        }
    });
});