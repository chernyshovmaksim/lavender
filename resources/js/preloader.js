export const Preloader = () => {
  // Preloader
  document.addEventListener("DOMContentLoaded", () => {
    // setTimeout(() => {
    //     document.querySelector("#preloader").style.display = "none";
    // }, 1200)
    document.querySelector("#preloader").style.display = "none";
  });
}