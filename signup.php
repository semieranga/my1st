<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form | CodingLab</title> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url(image/login_card_bg.png);
            background-repeat: no-repeat;
            background-size: 80%;
        }

        ::selection {
            background: rgba(235, 212, 10, 0.863);
        }

        .container {
            max-width: 440px;
            padding: 0 20px;
            margin: 170px auto;
        }

        .main-div {
            width: 100%;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
            padding: 50px;
        }

        .main-div .title {
            height: 90px;
            background: yellow;
            border-radius: 5px 5px 0 0;
            color: black;
            font-size: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-div .row {
            height: 45px;
            margin-bottom: 15px;
            position: relative;
        }

        .main-div .row input {
            height: 100%;
            width: 100%;
            outline: none;
            padding-left: 60px;
            border-radius: 5px;
            border: 1px solid lightgrey;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .main-div .row input:focus {
            border-color: rgba(211, 214, 8, 0);
            box-shadow: inset 0px 0px 2px 2px rgba(26, 188, 156, 0.25);
        }

        .main-div .row input::placeholder {
            color: #999;
        }

        .main-div .row i {
            position: absolute;
            width: 47px;
            height: 100%;
            color: #fff;
            font-size: 18px;
            background: #cedb12;
            border: 1px solid rgb(238, 234, 12);
            border-radius: 5px 0 0 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-div .pass {
            margin: -8px 0 20px 0;
        }

        .main-div .pass a {
            color: black;
            font-size: 17px;
            text-decoration: none;
        }

        .main-div .pass a:hover {
            text-decoration: underline;
        }

        .btn {
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            padding-left: 0px;
            background: rgb(238, 234, 12);
            border: 1px solid rgb(238, 234, 12);
            cursor: pointer;
            width: 100%;
        }

        .btn:hover {
            background: #928903;
        }

        .main-div .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 17px;
        }

        .main-div .signup-link a {
            color: #928903;
            text-decoration: none;
        }

        .main-div .signup-link a:hover {
            text-decoration: underline;
        }
    </style>

</head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Signup Form</span></div>
        <div class="main-div">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
          </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="email" id="email" placeholder="Enter Your Email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="re_password" id="passwordRe" placeholder="Re-enter Password" required>
          </div>
         
          <div class="row button">
            <button class="btn" name="Signup" onclick="signUp();">SignUp</button>
          </div>
          <div class="signup-link">Already a member? <a href="loglog.php">Login Here</a></div>
      </div>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>