<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <form method="post" action="/save">
         {{ csrf_field() }}
                 <div class="form-group">
                 <label for="exampleInputEmail1">Email</label>
                 <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
           <div class="form-group">
           <label for="exampleInputPassword1">Passworld</label>
            <input type="text" class="form-control" name="password" placeholder="Password">
           </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>





</body>
</html>
