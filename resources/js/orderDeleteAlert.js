const deleteForms = document.querySelectorAll(".delete-form");

deleteForms.forEach((element) => {
  const orderID = element.getAttribute("data-name");

  element.addEventListener("submit", (e) => {
    e.preventDefault();

    Swal.fire({
      title: `"Ordine ID:${orderID}" <br> L'ordine verrà eliminato.`,
      text: "Sei sicuro di procedere?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3490dc",
      cancelButtonColor: "#e3342f",
      confirmButtonText: "Si, rimuovi l'ordine",
      cancelButtonText: "No, conserva l'ordine",
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire("Successo!", "L'ordine è stato eliminato", "success");
      }
      document.querySelector(".swal2-confirm").addEventListener("click", function () {
        e.target.submit();
      });
    });
  });
});
