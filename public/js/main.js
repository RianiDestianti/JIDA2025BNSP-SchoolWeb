document.addEventListener("DOMContentLoaded", function() {
  console.log("Website Sekolah siap digunakan!");

  const form = document.querySelector("form");
  if (form) {
    form.addEventListener("submit", function(event) {
      const name = form.querySelector("[name='name']").value.trim();
      const email = form.querySelector("[name='email']").value.trim();
      const message = form.querySelector("[name='message']").value.trim();

      if (!name || !email || !message) {
        alert("Semua field harus diisi!");
        event.preventDefault();
      }
    });
  }
});
