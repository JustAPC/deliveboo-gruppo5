const deleteForms = document.querySelectorAll(".delete-form");

deleteForms.forEach((element) => {
  const name = element.getAttribute("data-name");

  element.addEventListener("submit", (e) => {
    e.preventDefault();

    Swal.fire({
      title: `"${name}" <br> Il piatto verrà eliminato.`,
      text: "Sei sicuro di procedere?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3490dc",
      cancelButtonColor: "#e3342f",
      confirmButtonText: "Si, rimuovi il piatto",
      cancelButtonText: "No, conserva il piatto",
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire("Successo!", "Il tuo piatto è stato eliminato", "success");
      }
      document.querySelector(".swal2-confirm").addEventListener("click", function () {
        e.target.submit();
      });
    });
  });
});
