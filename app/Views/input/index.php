<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Task Subscribe</title>
</head>

<style>
body {
    background-color: cornflowerblue;
    margin-top: 250px;
}
h1 {
 color: white;
 font-family: comic-sains;
 text-align: center;
 font: bold;
}
h2 {
 color: white;
 font-family: comic-sains;
 text-align: center;
 font: bold;
}
footer {
    position: absolute;
    color: white;
    bottom: 0;
    width: 100%;
    height: 60px;
    line-height: 60px;
    background-color: black;
}
</style>

<body>
  <div class="m-5">
        <h1 style="font-size: 65px;">My Product</h1>
      <h2>Subscribe to get the latest news!</h2>
  </div>

  <form class="row g-3" action="EmailController/create" method="post" style="justify-content:center">

  <div class="col-auto" style="width: 20rem;">
      <input type="email" name='email' class="form-control" id="inputPassword2" placeholder="example@mail.com">
    </div>
    <div class="col-auto" style="width: 20rem;">
      <input type="text" name='name' class="form-control" id="inputPassword2" placeholder="Siapa namamu?">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-warning mb-3"><u>Subscribe</u></button>
    </div>

  </form>

   <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

<footer>Terms & Support</footer>

</html>