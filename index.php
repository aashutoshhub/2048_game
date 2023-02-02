<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body{
        margin-top: 100px;
        margin-bottom:200px;
    }
    p{
        text-align: center;
        font-size:50px;
        color:blue
        
    }

</style>

</head>
<body class="container">
    <p>Welcome To 2048 Game</p>
    <form action="" method="post">
        <div>
            <div style="text-align:center;font-size:30px;">
            <label for="name" >Enter your name to play</label>
            </div>
            <input type="text" name="uname" id="uname" class="form-control">
        </div>
        <div class="position-relative" >
            <div class="position-absolute top-100 start-50 translate-middle mt-5 bi bi-caret-down-fill" >
            <a href="./2048.html/">
                <button type="button" class="btn btn-primary" style="width: 150px;">Start Game </button></a>
                 
        </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>