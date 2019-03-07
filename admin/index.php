<html>
  <head>

<style>
body{
    background: white;
   /* background:radial-gradient(hsl(0, 100%, 27%) 4%, hsl(0, 100%, 18%) 9%, hsla(0, 100%, 20%, 0) 9%) 0 0,
            radial-gradient(hsl(0, 100%, 27%) 4%, hsl(0, 100%, 18%) 8%, hsla(0, 100%, 20%, 0) 10%) 50px 50px,
            radial-gradient(hsla(0, 100%, 30%, 0.8) 20%, hsla(0, 100%, 20%, 0)) 50px 0,
            radial-gradient(hsla(0, 100%, 30%, 0.8) 20%, hsla(0, 100%, 20%, 0)) 0 50px,
            radial-gradient(hsla(0, 100%, 20%, 1) 35%, hsla(0, 100%, 20%, 0) 60%) 50px 0,
            radial-gradient(hsla(0, 100%, 20%, 1) 35%, hsla(0, 100%, 20%, 0) 60%) 100px 50px,
            radial-gradient(hsla(0, 100%, 15%, 0.7), hsla(0, 100%, 20%, 0)) 0 0,
            radial-gradient(hsla(0, 100%, 15%, 0.7), hsla(0, 100%, 20%, 0)) 50px 50px,
            linear-gradient(45deg, hsla(0, 100%, 20%, 0) 49%, hsla(0, 100%, 0%, 1) 50%, hsla(0, 100%, 20%, 0) 70%) 0 0,
            linear-gradient(-45deg, hsla(0, 100%, 20%, 0) 49%, hsla(0, 100%, 0%, 1) 50%, hsla(0, 100%, 20%, 0) 70%) 0 0;
            background-color: #300;
            background-size: 100px 100px;*/
}

#login{
    max-width: 350px;
    margin:5px;
    background: #f9f9f9;
    box-shadow: 0 0 10px #aaa;

}
#login h3{
    text-align: center;
    padding: 25px 10px;
    background-color: #2b2f3e;
    color: #b0b0bc;

}
fieldset{
    margin: 0;
    border: none;
}
form{
    padding: 0;
    margin: 0;
    padding: 15px;
}
input[type='text'],
input[type="password"]
{
    width: 90%;
    padding: 1em;
    margin-top: 1.2em;
    color: #888;

}
select{
 width: 90%;
    padding: 1em;
    margin-top: 1.2em;
    color: #888;
  }

input[type="submit"]{
    width: 100px;
    padding: 1.4em;
    margin: 1.5em 0;
    color: #888;
    background-color:#00cdb1 ;
    border:none;
    color:#eee;
    border-bottom: 4px solid transparent;
}
input[type="submit"]:hover{
    opacity: 0.8;
    border-color: #00adb1;

}



input[type="button"]{
    width: 100px;
    padding: 1.4em;
    margin: 1.5em 0;
    color: #888;
    background-color:#00cdb1 ;
    border:none;
    color:#eee;
    border-bottom: 4px solid transparent;
}
input[type="button"]:hover{
    opacity: 0.8;
    border-color: #00adb1;
    text-decoration: none;
}



form p{
    text-align: center;
    color: #888;
    width: 30px;
    margin: 10px auto 0;
    background: #f9f9f9;
    position: relative;
    bottom: 20px;
}
.border-p{
    border-top: 1px solid #888;
    margin: 10px 10px;
}
button{
    background-color: #3b5998;
    width: 100%;
    padding: 1.4em;
    margin-bottom: 1em;
    color: #888; ;
    border:none;
    color:#eee;
    border-bottom: 4px solid transparent;
}
button:hover{
    opacity: 0.9;
    border-color: #3b3998;

}

a{
  text-decoration: none;
  color: #221;
}
a:hover{
   text-decoration: none;
}

</style>
</head>
<body>
<br>
<br>
<br>

<center>
<form method="post" name="login" action="cek-login.php">
    <div id="login">
        <h3>Login Administrator</h3>
        <fieldset>
            <form action="">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Login">&nbsp;&nbsp;
                <a href="index.php"><input type="button" name="submit" value="Cancel"></a>

            </form>
        </fieldset>
    </div>
    </form>
    </center>
  </body>
  </html>
