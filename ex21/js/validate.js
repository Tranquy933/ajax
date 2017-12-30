function validateFormList(){
    if($('#user').val() == "" || $('#user').val().length < 5){
        $('.required').text('Do not enter more than 5 characters');
        $('#user').focus();
        return false;
    }
    else{
        $('.required').text('');
    }

    if($('#describes').val() == "" || $('#describes').val().length > 50){
        $('.required_dess').text('Enter up to 50 characters');
        $('#describes').focus();
        return false;
    }
    else{
        $('.required_dess').text('');
    }

    if($('#describe').val() == "" || $('#describe').val().length > 100){
        $('.required_des').text('Enter up to 100 characters');
        $('#describe').focus();
        return false;
    }
    else{
        $('.required_des').text('');
    }
    if (!$('#user').val() == "" &&
        !$('#describes').val() == "" &&
        !$('#describe').val() == "") {
        alert('submitted successfully !')
    }

    return true;

}
