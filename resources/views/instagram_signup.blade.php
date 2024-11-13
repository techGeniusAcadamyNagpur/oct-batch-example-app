<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body{
        background-color:#f7f7f7;
        
    }
    .box1{ 
        background-color:white;
        width: 300px;
        margin:auto;
        padding:50px;
        text-align:center;   
        outline: solid 2px #c6c6c6;       
    }

    .box1 h1{
        font-family:Pristina;
        font-size:70px;
    }

    .box1 h3{
        color:#b1b1b1;
        margin-top:-40px;
    }

    .box1 button{
        color:white;
        background-color:#00a3f0;
        width: 225px;
        height: 34px;
        font-size:15px;
        font-weight:bold;
        border-radius: 3px;
        border-color:#00a3f0;
        margin:25px;
        
    }

    .box1 input{
        width: 200px;
        padding:10px;
        margin:3px;
        background-color:#f3f3f3;
        font-weight:light;
        border-color:#e7e7e7;
    }

    .box1 label{
        color:#b1b1b1;
    }

    .box2{ 
        background-color:white;
        width: 350px;
        margin:auto;
        margin-top:10px;
        padding:25px;
        text-align:center;
        outline: solid 2px #c6c6c6;       
    }

    .facebook_logo{
        font-size:22px;
    }

</style>
<body>
    <div class="box1">
    <h1>Instagram</h1>
        <h3>Sign up to see photos and videos from your friends.</h3>
        <button ><i class="fa fa-facebook-official facebook_logo" aria-hidden="true"></i> Login With facebook</button>
        <form method="post" action="/signup">
            @csrf
            <input type="text" name="contact" id="contact" placeholder="phone no, email"><br>
            <input type="password" name="password" id="password" placeholder="Enter your password"><br>
            <input type="text" name="full_name" id="full_name" placeholder="full_name"><br>
            <input type="email" name="email" id="email" placeholder="email"><br>
            <input type="text" name="username" id="username" placeholder="user name"><br>

            <button>Sign up <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </form>

        <label for="">By siging our platform............</label><br>
        <a href="https://www.facebook.com/">Login with facebook</a><br>
        <a href="">Forget password?</a>
    </div>

    <div class="box2">
    Have an account?  <a href="/instagram_login">Log in</a>
    </div>
       
</body>
</html>
