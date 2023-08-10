<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
  </script>
  <link href="./style/login.css" rel="stylesheet" />

  <style>
  body {
    background-color: whitesmoke;
  }
  </style>
</head>

<body>

  <section>
    <div class="container mt-5 pt-5">

      <div class="col-12 col-sm-8 col-md-4 m-auto">
        <div class="card">
          <div class="card-body" style="height: 400px;">
            <form action="login.php" method="post">
              <div class="text-center mt-3">
                <img class="mt-4 mb-4" src="./image/danawa_RGB.png" height="50" alt="logo" />
              </div>
              <input type="text" name="email" id="email" class="form-control my-3 py-2" placeholder="email"
                style="opacity: 0.5;">
              <input type="password" name="password" id="password" class="form-control my-3 py-2" placeholder="pasword"
                style="opacity: 0.5;">
              <div class="d-grid gap-2" style="margin-top: 10px;">
                <button class="btn btn-primary" type="submit">로그인</button>
              </div>
              <div class="text-center mt-2">
                <a class="aho" href="123" style="text-decoration:none; font-size:12px; color:darkgray">비밀번호 변경</a>
                <span style="color: darkgray; font-size:12px;">|</span>
                <a href="" style="text-decoration:none; font-size:12px; color:darkgray">회원가입</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    </div>
  </section>
</body>

</html>