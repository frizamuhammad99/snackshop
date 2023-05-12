function searchCardProduct() {
  const input = document.querySelector(".input-pencari").value.toLowerCase();
  const cardList = document.querySelectorAll(".card-judul");
  for (card of cardList) {
    if (card.innerText.toLowerCase().includes(input)) {
      card.parentElement.parentElement.parentElement.style.display = "flex";
    } else {
      card.parentElement.parentElement.parentElement.style.display = "none";
    }
  }
}
document
  .querySelector(".tombol-pencari")
  .addEventListener("click", function () {
    searchCardProduct();
  });

