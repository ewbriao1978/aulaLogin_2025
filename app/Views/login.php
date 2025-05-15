<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>

</head>
<body>
    
    <div id="form" class="row justify-content-center">
       
    <form action="/login" method="post" class="col-5">
         <h1>Login</h1>
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1"  name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="exampleFormControlInput2"  name="password" required>
        <br>
        <button type="submit">Login</button><br>
         <a href="/register">Register</a>
    </form>
</div>

   

  
</body>
</html>