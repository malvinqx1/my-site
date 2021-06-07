<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="scss/menu2.css" rel="stylesheet" /><title>Document</title><link href="./scss/menu2.css" rel="stylesheet" />
    <title>Document</title></head>
    <style>
        a{
            text-decoration: none;
            color: white;
            font-size: 15px;
        }
        </style>
    <body>
        <div class="container">
            <div class="left">
                <div class="circle">R</div> 
                <p class="robot">Robot</p>
            </div>  
            <div class="right">
                <a href="index.html"  ><img src="svg/menu2.svg"> </a>
            </div>
        </div>
        <div class="col">
            <h1>Форма авторизации</h1>
            <div class="input-form">
            <form action="auth.php" method="post">
               <br> <input type="text" class="form_control" name="Login" id="Login" placeholder="Введи логин" ><br>
               <br> <input type="password" class="form_control" name="Password" id="Password" placeholder="Введи пароль"><br>
               <div class="button">
            <button class="btn btn-success" type="submit">Перейти</button>
        </div>
        </form> 
        
           </div> 
           
</div>
    </body>
    </html>