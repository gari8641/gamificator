function setNumber(value) {
    document.getElementById('numberinput').value = value;
}

// グローバルスコープに公開
window.setNumber = setNumber;