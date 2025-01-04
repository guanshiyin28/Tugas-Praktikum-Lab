document
  .getElementById("formLuasPersegi")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah form dari pengiriman default

    // Mengambil nilai dari input
    let sisi = document.getElementById("sisi").value;

    // Menghitung luas persegi
    let luas = sisi * sisi;

    // Menampilkan hasil
    document.getElementById("hasil").innerText = "Luas Persegi: " + luas;
  });
