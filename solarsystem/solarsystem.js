document.querySelectorAll(".card").forEach((c) => {
    c.addEventListener("click", () => {
      c.classList.toggle("active");
    });
  });