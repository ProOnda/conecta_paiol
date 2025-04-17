function showFields() {
    const role = document.getElementById("role").value;
    document.getElementById("comprador-fields").style.display = role === "comprador" ? "block" : "none";
    document.getElementById("agricultor-fields").style.display = role === "agricultor" ? "block" : "none";
    document.getElementById("nutricionista-fields").style.display = role === "nutricionista" ? "block" : "none";
}