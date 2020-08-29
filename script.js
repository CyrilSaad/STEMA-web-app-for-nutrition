function showMenu() {
    var current = document.getElementById('burger-menu').style.display;
    document.getElementById('burger-menu').style.display=(current!="block")?"block":"none";
}

function animateMe(element) {
    animateRight(document.getElementById(element), 100, 700);
    }

    function validateSignUp() {
        const pass = document.getElementById('pass');
        const confirmPass = document.getElementById('confirmPass');

        if(pass.value != confirmPass.value) {
            pass.style.borderColor = "red";
            pass.style.marginBottom = "5px";
            document.getElementById('passErr').style.display = "block";
            confirmPass.style.borderColor = "red";

            return false;
        }

        else {
            pass.style.borderColor = "#ccc";
            confirmPass.style.borderColor = "#ccc";
            return true;
            
        }
    }