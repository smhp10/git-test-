function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;
    var subject = document.getElementById('subject').value;

    if (name == '' || email == '' || message == '' || subject == '') {
        alert('全ての項目を入力してください');
        return false;
    }
    return true;
}
