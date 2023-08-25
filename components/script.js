function formatNumber(input) {
    // Remove existing dots, commas, and "Rp" prefix
    var num = input.replace(/[.,]|Rp\s?/g, "");
    // Add thousands separator and "Rp" prefix
    num = "Rp " + num.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    return num;
}
function removeNonNumeric(input) {
    return input.replace(/[^0-9.,]/g, "");
}
function handleInputChange(input) {
    var sanitizedValue = removeNonNumeric(input.value);
    input.value = formatNumber(sanitizedValue);
}
function validateJumlahPinjaman(input) {
    var maxPinjaman = 300000000; // 300 juta
    var pinjaman = removeNonNumeric(input.value);
    if (pinjaman > maxPinjaman) {
        alert("Jumlah pinjaman tidak boleh melebihi 300 juta");
        input.value = formatNumber(maxPinjaman);
    }
}