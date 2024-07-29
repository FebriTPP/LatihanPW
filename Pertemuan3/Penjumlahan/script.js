function jumlah() {
    var bilangan_1 = parseFloat(document.form.bilangan_1.value);
    var bilangan_2 = parseFloat(document.form.bilangan_2.value);
    var jumlah;

    if (isNaN(bilangan_1)){
        bilangan_1 = 0.0;
    }

    if (isNaN(bilangan_2)){
        bilangan_2 = 0.0;
    }

    jumlah = bilangan_1 + bilangan_2;

    alert("Hasil Penjumlahan = " + jumlah);
}