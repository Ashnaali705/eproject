<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
        body{
            background: url(https://media.istockphoto.com/id/1134719594/photo/gardening-tools-and-flowers-on-soil.jpg?s=612x612&w=0&k=20&c=63VLWD2WXDI2-aGt3Txb6MR-B0q1twdo5LiAFRfovgQ=);
            background-color: rgb(138, 105, 105);
            color: white;
            font-family: Arial,  sans-serif;
            padding: 20px;
            margin: 0%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-image: none;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #000;
            background-blend-mode: normal;
            background-clip: border-box;
            background-origin: padding-box;
            background-color: rgba(192, 41, 41, );

        }
        h1{
            color: rgb(63, 63, 77);
        }
       .btn:hover{
        background-image:linear-gradient(gray,black,gray);
        border-radius: 100%;
        border: 2px solid white;
        
       }

    </style>
</head>
<body>
    <form action = "dashboard.php" method="post" class="container">
        <img src="https://media.istockphoto.com/id/1134719594/photo/gardening-tools-and-flowers-on-soil.jpg?s=612x612&w=0&k=20&c=63VLWD2WXDI2-aGt3Txb6MR-B0q1twdo5LiAFRfovgQ=" alt="">
        <h1>contact us</h1>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email Address</label>
          <input type="email"  aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
</body>
</html>