const inputBox = document.getElementById("age");

var invalidChars = [
    "-",
    "+",
    "e",
    ];

    inputBox.addEventListener("input", function() {
        this.value = this.value.replace(/[e\+\-]/gi, "");
    });

    inputBox.addEventListener("keydown", function(e) {
        if (invalidChars.includes(e.key)) {
             e.preventDefault();
        }
    });

    // PASSWORD VALIDATION
    function validation() {
        var pass = document.getElementById("password").value;
        var c_pass = document.getElementById("confirm-password").value;

        if (pass=="" || c_pass=="") {
            document.getElementById('errorMsg').innerHTML = "Please input your password!";
            return false;
        } else if (pass !== c_pass) {
            document.getElementById('errorMsg').innerHTML = "Password Doesn't Match!";
            return false;
        }
    };

    var passLength = document.getElementById("password").length;
    var c_passLength = document.getElementById('confirm-password').length;

