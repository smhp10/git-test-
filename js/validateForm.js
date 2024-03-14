function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (name == '' || email == '' || message == '') {
        alert('全ての項目を入力してください');
        return false;
    }
    return true;
}
