$(document).on('click', "#login", function () {
    var username = $('#username').val();
    var loginpass = $('#loginpass').val();
    var valid = true;
    // var user_vaildation = (/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,4})+$/);
     if (username=="")
        {
            $("#username").css({"border": "1px solid red"});
            $("#loginpass").css({"border": "1px solid #dddfe2"});
            $("#err1").css({"display": "block"});
            $("#err2").css({"display": "none"});
            valid = false;
            return false;
        }
    if (loginpass=="")
        {
            $("#loginpass").css({"border": "1px solid red"});
            $("#username").css({"border": "1px solid  #dddfe2"});
            $("#err1").css({"display": "none"});
            $("#err2").css({"display": "block"});
            valid = false;
            return false;
        }
    if(valid)
    {
        $("#loginpass").css({"border": "1px solid #dddfe2"});
        $("#username").css({"border": "1px solid  #dddfe2"});
        $("#err1").css({"display": "none"});
        $("#err2").css({"display": "none"});
        baseURL =window.location.protocol + "//" + window.location.host + "/facebook";
        $.ajax({
        method: "post",
        url: baseURL + '/api/login',
        data: {  User : username ,Pass : loginpass}
        })
        .done(function( msg ) {
            var valid1 = true;
            if(msg == "err1"){
                $("#username").css({"border": "1px solid red"});
                $("#loginpass").css({"border": "1px solid #dddfe2"});
                $("#err1").css({"display": "block"});
                $("#err2").css({"display": "none"});
                $("#Err").html("");
                valid1 = false;
                    return false;
                }
                if(msg == "err2"){
                $("#loginpass").css({"border": "1px solid red"});
                $("#username").css({"border": "1px solid  #dddfe2"});
                $("#err1").css({"display": "none"});
                $("#err2").css({"display": "block"});
                $("#Err").html("");
                                valid1 = false;
                    return false;
                }
                if(msg == "invalid"){
                $("#loginpass").css({"border": "1px solid #dddfe2"});
                $("#username").css({"border": "1px solid  red"});
                $("#err1").css({"display": "block"});
                $("#err2").css({"display": "none"});
                $('#loginpass').val("");
                // $("#Err").html("Email or Password you entered invalid");
                valid1 = false;
                    console.log(msg)
                    return false;
                }
                if(valid1==true) {
                    // alert(msg)
                    // console.log(msg)
                    window.location.href = msg;
                }
        });
    }
});
$(document).on('click', "#logout", function () {
    baseURL = window.location.protocol + "//" + window.location.host + "/facebook";
    $.ajax({
        method: "post",
        url: baseURL + '/api/logout',
        })
        .done(function( msg ) {
            window.location.href=msg;
        });
            
});

/////////////////////////////////////////////////////
// /////////////Already Have account ///////
/////////////////////////////////////////////////////
function validateEmail2() {
    let x = document.forms["-myForm"]["-email"].value;
    let Reg = (/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,4})+$/)
    if (x.match(Reg)) {
        validatePass2();
    }
    else{
        document.getElementById("err1").style.display= 'block';
        document.getElementById("err2").style.display= 'none';
        document.getElementById("-or").style.display= 'block';
        document.getElementById("Cr-acc").style.visibility= 'visible';
        document.getElementById("fpass").innerHTML= 'Forgotten account?';
    }
    return false;
    }
function validatePass2() {
        let x = document.forms["-myForm"]["-pass"].value;
        if ( x == ""){
            document.getElementById("err2").style.display= 'block';
            document.getElementById("err1").style.display= 'none';
            document.getElementById("-or").style.display= 'none';
            document.getElementById("Cr-acc").style.visibility= 'hidden';
            document.getElementById("fpass").innerHTML= 'Forgotten password?';
        }
        else{
            window.location = 'login-done.html';
        }
        return false;
    }
/////////////////////////////////////////////////////
// js for create new account
////////////////////////////////////////////
    function myFunction() {
        var x = document.getElementById("fname");
        if (x.value==""){
            x.style.border = "1px solid red";
        }
    return false;
        }
    function myFunction2() {
        var x = document.getElementById("fname");
        x.style.border = "1px solid #dddfe2";
    return false;
    }
    function myFunction3() {
        var x = document.getElementById("lname");
        if (x.value ==""){
            x.style.border = "1px solid red";
        }
    return false;
        }
    function myFunction4() {
        var x = document.getElementById("lname");
        x.style.border = "1px solid #dddfe2";
    return false;
    }
    function myFunction5() {
        var x = document.getElementById("-email");
        if (x.value== ""){
            x.style.border = "1px solid red";
        }
            return false;
        }
    function myFunction6() {
        var x = document.getElementById("-email");
        x.style.border = "1px solid #dddfe2";
    return false;
    }
    function myFunction7() {
        var x = document.getElementById("-pass");
        if (x.value==""){
            x.style.border = "1px solid red";
        }
    return false;
        }
    function myFunction8() {
        var x = document.getElementById("-pass");
        x.style.border = "1px solid #dddfe2";
    return false;
    }
    function myFunction9() {
        var x = document.getElementById("male");
        var y = document.getElementById("female");
        x.style.border = "1px solid #dddfe2";
        y.style.border = "1px solid #dddfe2";

    }
    function myFunction10() {
        var x = document.getElementById("day");
        var y = document.getElementById("month");
        var z = document.getElementById("year");
        x.style.border = "1px solid #dddfe2";
        y.style.border = "1px solid #dddfe2";
        z.style.border = "1px solid #dddfe2";

    }
/////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////
    $(document).on('click', "#btnsiup", function () {
        var Firstname = $('#fname').val();
        var Lastname = $('#lname').val();
        var Email = $('#-email').val();
        var password = $('#-pass').val();
        var Gender = $('input[name="gender"]:checked').val();
        // console.log(Gender)
        var Day = $("#day option:selected").val();
        var Month1 = $("#month option:selected").val();
        let x = 1 ;
        var Month2 = parseFloat(Month1);
        var Month = x + Month2 ;
        var Year = $("#year option:selected").val();
        // var Year1 = $("#year option:selected").val();
        let currentYear = new Date().getFullYear();
        var name_vaildation = /^[a-zA-Z]/;
        var email_vaildation = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,4})+$/;
        var password_vaildation = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!$])[a-zA-Z0-9!$ ]{8,15}$/;
        var valid = true;

        if (Firstname==""/*!name_vaildation.test(Firstname)*/)
        {
            $("#fname").css({"border": "1px solid red"});
            valid = false;
        }

        if (Lastname==""/*!name_vaildation.test(Lastname)*/)
        {
            $("#lname").css({"border": "1px solid red"});
            valid = false;
        }

        if (password==""/*!password_vaildation.test(password)*/)
        {
            $("#-pass").css({"border": "1px solid red"});
                valid = false;
        }

        if (Email==""/*!email_vaildation.test(Email)*/)
        {
            $("#-email").css({"border": "1px solid red"});
            valid = false;
        }

        if(Gender==undefined)
        {
            $("#male").css({"border": "1px solid red"});
            $("#female").css({"border": "1px solid red"});
            valid = false;
        }

        if(currentYear - Year < 18)
        {
            $("#day").css({"border": "1px solid red"});
            $("#month").css({"border": "1px solid red"});
            $("#year").css({"border": "1px solid red"});
            valid = false;
        }

        if (valid){
            baseURL =window.location.protocol + "//" + window.location.host + "/facebook";
            $.ajax({
                method: "post",
                url: baseURL + '/api/signup',
                data: {  fname : Firstname ,lname : Lastname, email : Email , pass : password ,
                gender : Gender, day : Day , month : Month , year : Year}
            })
                .done(function( msg ) {
                //   alert( "Data Saved: " + msg );
                    if(msg == "Only letters allowed"){
                            $("#fname").css({"border": "1px solid red"});
                            $("#Err-form").html(msg);
                            return false;
                    }
                    if(msg == "Only letters Allowed"){
                        $("#lname").css({"border": "1px solid red"});
                        $("#Err-form").html(msg);
                        return false;
                    }
                    if(msg == "Invalid email format"){
                        $("#-email").css({"border": "1px solid red"});
                        $("#Err-form").html(msg);
                        return false;
                    }
                    if(msg == "Your password must have capital letter and Number and special character ! , $"){
                        $("#-pass").css({"border": "1px solid red"});
                        $("#Err-form").html(msg);
                        return false;
                    }
                    if(msg == "Your Age must be over 18"){
                        $("#day").css({"border": "1px solid red"});
                        $("#month").css({"border": "1px solid red"});
                        $("#year").css({"border": "1px solid red"});
                        $("#Err-form").html(msg);
                        return false;
                    }
                    if(msg == "Gender is required"){
                        $("#male").css({"border": "1px solid red"});
                        $("#female").css({"border": "1px solid red"});
                        $("#Err-form").html(msg);
                        return false;
                    }
                    if(msg == "Your Account has been created"){
                        $("#Err-form").html(msg);
                        $('#fname').val('');
                        $('#lname').val('');
                        $('#-email').val('');
                        $('#-pass').val('');
                        $('input[name="gender"]').prop("checked", false);                        $('#day').val(new Date().getDate()).trigger('change');
                        $('#month').val(new Date().getMonth()).trigger('change');
                        $('#year').val(new Date().getFullYear()).trigger('change');
                    }
                });
        }
    });


