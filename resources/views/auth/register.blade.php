<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>
<body>

<section class='header'>
    <div class='right'>
        <div class='content'>

        @if(Auth::user())
        <a href="">{{Auth::user()->name}}</a>
        <a href="">Logout</a>
        @else
        <a href="\login">Login</a>
        <a href="\register">Register</a>
        @endif
        </div>

    </div>
</section>

    <section class="hero">
        <div class="subHero">
            <div class="left">
             <h2>Start sharing</h2>
             <form action="\register" method="post"  class="loginForm">
                @csrf
                <label for="name"> Name</label>
                <input type="text" name="name" id="" placeholder="Enter your Name" required class="inTest">
                <label for="email"> Email</label>
                <input type="email" name="email" id="" placeholder="Enter your Email" required class="inTest">
                <label for="password"> Password</label>
                <input type="password" name="password" id="" placeholder="Password" requird >
                <label for="password"> Confirm Password</label>
                <input type="password" name="password_confirmation" id="" placeholder="Confirm Password" requird >
                <button type="submit">Register</button>

             </form>
                    <h3>
                        <span>
                        do you have account?
                        </span>
                            <a href="/login"> Sign In</a>
                    </h3>

                

            </div>
            <div class ="right">
                <img src="5.jpg" alt="">
                <!-- <h2>CREATE A NEW POST</h2>
                <form action="" method="post">
                    <input type="text" class="title">
                    <input id="inputTag" class="image" type="file" accept="image/*"/>
                    <textarea name="body" id="" class ="content" cols="5" rows="5"></textarea> -->
                <!-- <div class ="rightUp"></div>
                <div class="rightDown"></div> -->
            </div>

        </div>

    </section>
</body>
</html>