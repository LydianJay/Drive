$(document).ready(
    $("#rgtForm").submit(function (event) {
        
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#pswrd").val();
        var confirm = $("#cfrm").val();
        
        if(name === ''){
            alert('Empty Name');
            event.preventDefault();
        }

        if(email === ''){
            alert('Empty Email');
            event.preventDefault();
        }


        if(password !== confirm){
            alert('Password doest not match with confirm password!');
            event.preventDefault();
        }
        else if(password.length < 8 || confirm.length < 8){
            alert('Password too short');
            event.preventDefault();            
        }


        
    })
);