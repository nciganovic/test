$(document).ready(function(){

    console.log("sendMessge.js");

    $("#sendMsg").click(function(){
        console.log("click");
        $("#form-errors").html("");

        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#message").val();

        name = name.trim();
        email = email.trim();
        message = message.trim();

        console.log(name, email, message);

        var nameRegex = /^[A-z]{1,20}$/;
        var isNameValid =  nameRegex.test(name);

        var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var isEmailValid =  emailRegex.test(email);

        var isMessageValid = true;
        if(message.length > 250 || message.length == 0){
            isMessageValid = false;
        }

        if(isNameValid && isEmailValid && isMessageValid){
            $.ajax({
                url:"models/insertMessage.php",
                type:"json",
                method: "POST",
                data:{
                    name: name,
                    email: email,
                    message: message
                },
                success: function(data){
                    var msg = JSON.parse(data);

                    if(msg["success"] == "1"){
                        alert("Comment sent successfuly! If admin approves message it will be published.");
                    }
                    else{
                        alert(msg["msg"]);
                    }

                    $("#name").val("");
                    $("#email").val("");
                    $("#message").val("");
                },
                error: function(err){
                    console.log(err);
                }
            })
        }
        else{
            
            var errors = []; 

            if(!isNameValid){
                errors.push("Name can only be one word between 1 and 20 characters.");
            }
            if(!isEmailValid){
                errors.push("Email is in wrong format.");
            }
            if(!isMessageValid){
                if(message.length == 0){
                    errors.push("Your message field is empty.");
                }
                else{
                    errors.push("Maximum lenght is 250 characters for message.");
                }
                
            }

            for(e of errors){
                var liTag = "<li class='text-danger'>" + e + "</li>";
                $("#form-errors").append(liTag);  
            }

        }

    });

    

});