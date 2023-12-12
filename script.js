$(document).ready(function() {
    $("#registrationForm").validate({
      rules: {
        imie: "required",
        nazwisko: "required",
        datau: "required",
        email: {
          required: true,
          email: true
        },
        tel: "required",
        woje: "required",
        plec: "required"
      },
      messages: {
        imie: "Proszę podać imię",
        nazwisko: "Proszę podać nazwisko",
        datau: "Proszę podać datę urodzenia",
        email: {
          required: "Proszę podać adres email",
          email: "Proszę podać prawidłowy adres email"
        },
        tel: "Proszę podać numer telefonu",
        woje: "Proszę wybrać województwo",
        plec: "Proszę wybrać płeć"
      }
    });
  });
  