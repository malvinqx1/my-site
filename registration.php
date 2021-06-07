<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="form.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
    
        <div class="row">
                <div class="col">
                    <h1>Форма регистрации</h1>
                    <div class="input-form">
                         <form action="reg.php" method="post">
                         <br> <input type="text" class="form_control" name="Name" id="Name" placeholder="Введи имя"><br>
                       <br> <input type="text" class="form_control" name="Login" id="Login" placeholder="Введи логин"><br>
                       <br> <input type="password" class="form_control" name="Password" id="Password" placeholder="Введи пароль"><br>
                       <br> <button class="btn btn-success" type="submit">Вход</button>
                        </form> 
                        
                      <a  href="index.php"><img src="svg/back.svg" width="45px"></a> 
                   </div>
                 
                </div>
        </div>
</div>
                    
        </div>  
    </div>
</body>
</html>
