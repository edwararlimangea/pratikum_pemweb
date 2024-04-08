document.addEventListener("DOMContentLoaded", function () {
  document.title = "Landing Page - Tribun News";
  let heading = document.querySelector("h1 b");
  heading.textContent = "KUASA HUKUM";
  let contributor = document.querySelector("h5");
  contributor.textContent =
    "Laporan Kontributor Tribunjabar.id, Dian Herdiansyah";
  let image = document.querySelector("img");
  image.alt = "Gambar Pelaku dan kepolisian";
  let footerText = document.querySelector("footer h4");
  footerText.textContent = "© Tribun News 2024";
  document.getElementById("pelaku").src =
    "https://asset-2.tstatic.net/tribunnews/foto/bank/images/advokat-paslonnnn.jpg";
});
$(document).ready(function () {
  $(".left").click(function () {
    $("#myCarousel").carousel("prev");
  });
  $(".right").click(function () {
    $("#myCarousel").carousel("next");
  });
});
