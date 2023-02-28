<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <head>
        <style>
          body{
                background-color: rgb(241, 246, 247);
            }
            #form{
                position: absolute;
                top: 80px;
                left: 100px;   
                text-indent: 50px;
                text-align: auto;
                letter-spacing: 3px;
                padding: 20px;
                margin: 50px;
                border: 2px solid rgb(152, 152, 211);
                outline:rgb(52, 92, 180) solid 10px;
                animation: mymove 4s infinite;
                width: 300px;
                height: 470px;
            }
            @keyframes mymove {
                60% {outline-offset: 20px;}
            }
            #d1{
                position: absolute;
                top: 80px;
                left: 60px;  
            }
            img{
                position: absolute;
                left: 650px;  
                width: 700px;
                height: 750px;
            }
            #message {
              display:none;
              background: #f1f1f1;
              color: #000;
              position: relative;
              padding: 20px;
              margin-top: 10px;
            }

            #message p {
              padding: 10px 35px;
              font-size: 18px;
            }

            /* Add a green text color and a checkmark when the requirements are right */
            .valid {
              color: green;
            }

            .valid:before {
              position: relative;
              left: -35px;
              content: "✔";
            }

            /* Add a red text color and an "x" when the requirements are wrong */
            .invalid {
              color: red;
            }

            .invalid:before {
              position: relative;
              left: -35px;
              content: "✖";
            }
        </style>
    </head>

    <body>
        <h1 style="position: absolute; top: 10px; left: 600px;">MIRESEVINI!</h1>
        <img src="image/regi.png">

        <form action="insertPedagog.php" method="post" id="form">
            <label>Emri:</label>
            &nbsp;&nbsp;<input type="text" name="emri" required >
            <br><br><br>
            <label>Mbiemri:</label>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mbiemri" required>
            <br><br><br>
            <label>Email:</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" required >
            <br><br><br>
            <label>Cel:</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="cel" required>
            <br><br><br>
            <label>Username:</label>
            &nbsp;&nbsp;<input type="text" name="username" required >
            <br><br><br>
            <label>Password:</label>
            &nbsp;&nbsp;<input type="password" id="pass" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Passwordi duhet te kete te pakten nje shkronje te madhe, nje te vogel, nje numer dhe te kete nje gjatesi prej 8 karakteresh" required>
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit">
        </form>

        
        <script>
            var input = document.getElementById("pass");
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var number = document.getElementById("number");
            var length = document.getElementById("length");
            
            // When the user clicks on the password field, show the message box
            input.onfocus = function() {
              document.getElementById("message").style.display = "block";
            }
            
            // When the user clicks outside of the password field, hide the message box
            input.onblur = function() {
              document.getElementById("message").style.display = "none";
            }
            
            // When the user starts to type something inside the password field
            input.onkeyup = function() {
              // Validate lowercase letters
              var lowerCaseLetters = /[a-z]/g;
              if(input.value.match(lowerCaseLetters)) {  
                letter.classList.remove("invalid");
                letter.classList.add("valid");
              } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
              }
              
              // Validate capital letters
              var upperCaseLetters = /[A-Z]/g;
              if(input.value.match(upperCaseLetters)) {  
                capital.classList.remove("invalid");
                capital.classList.add("valid");
              } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
              }
            
              // Validate numbers
              var numbers = /[0-9]/g;
              if(input.value.match(numbers)) {  
                number.classList.remove("invalid");
                number.classList.add("valid");
              } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
              }
              
              // Validate length
              if(input.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
              } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
              }
            }
            </script>
    </body>
</html>
