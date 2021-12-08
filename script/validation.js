$().ready(function () {
  $("#login-form").validate({
    rules: {
      username: {
        required: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
    },
  });
});

// Sign up form validation
jQuery.validator.addMethod(
  "lettersonly",
  function (value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
  },
  "Only alphabetical characters"
);

$().ready(function () {
  $("#register-form").validate({
    rules: {
      emri: {
        required: true,
        minlength: 4,
        lettersonly: true,
      },
      mbiemri: {
        required: true,
        minlength: 4,
        lettersonly: true,
      },
      email: {
        required: true,
        email: true,
      },
      telefoni: {
        required: true,
      },
      nr_personal: {
        required: true,
      },
      adresa: {
        required: true,
      },
      username: {
        required: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
    },
    messages: {
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
      },
    },
  });
});
