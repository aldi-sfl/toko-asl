// // clear input after button clicked
// function clearInput() {
//     document.getElementById("myInput").value = "";
// }

// popover
const popoverTriggerList = document.querySelectorAll(
    '[data-bs-toggle="popover"]'
);
const popoverList = [...popoverTriggerList].map(
    (popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl)
);

// format rupiah dalam input
$(document).ready(function () {
    $("#harga").on("input", function () {
        var input = $(this).val(); // Get the user input
        var formatted = input
            .replace(/\D/g, "")
            .replace(/\B(?=(\d{3})+(?!\d))/g, "."); // Format the input
        $(this).val("Rp." + formatted); // Set the formatted value back to the input
    });

    $("form").submit(function () {
        var input = $("#harga").val(); // Get the input value
        var numeric = input.replace(/\D/g, ""); // Remove non-numeric characters
        $("#harga").val(numeric); // Set the numeric value back to the input
    });
});

//validation bootstrap
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()
