document.getElementById("Login").addEventListener("click", function () {
  alert("Bidang Tidak Boleh Kosong");
});
document.getElementById("Lupa").addEventListener("click", function () {
  let text = "";
  let pil = confirm("Apakah Anda Lupa Password?");
  if (pil == true) {
    text = "Ya, Saya Lupa";
  } else {
    text = "Tidak, Hanya Tes Saja";
  }
  document.getElementById("Lupa").innerHTML = text;
});
document.getElementById("PromptBox").addEventListener("click", function () {
  let person = prompt(
    "Apakah Pernah Membuat Akun Sebelumnya? Sudah/Tidak ",
    ""
  );
  if (person != null) {
    document.getElementById(
      "Prompt Box"
    ).innerHTML = `${person} ,Mohon ditunggu beberapa menit untuk verifikasi`;
  }
});
document.getElementById("OnClick").addEventListener("click", function () {
  document.getElementById("DOM").innerHTML = `Masukan Email bukan klik Iconya`;
});
document.getElementById("onclick").addEventListener("click", function () {
  document.getElementById("AddEventListener").innerHTML =
    "Masukan Password bukan klik Iconya";
});
function Onchange() {
  let x = document.getElementById("prodi").value;
  document.getElementById("Onchange").innerHTML = `TRIBUNNEWS.COM, ${x}`;
}
function Onload() {
  document.getElementById("Onload").innerHTML = `Berita Terkini`;
}
