

        function validatesignup(){

            var a = document.getElementById("pass-signup").value;
            var b = document.getElementById("confirm_pass-signup").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
