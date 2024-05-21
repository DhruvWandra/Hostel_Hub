const sign_in_btn = document.querySelector("#usign-in-btn");
const sign_up_btn = document.querySelector("#usign-up-btn");
const container = document.querySelector(".ucontainer");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("usign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("usign-up-mode");
});
