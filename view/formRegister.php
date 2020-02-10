<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="./css/styleRegister.css" rel="stylesheet">
    <title>Sign In</title>
</head>
<body>

<div class="container register-form">
    <div class="form">
        <div class="form-content">
            <form method="post" action="registerAnswer">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name *" value="" name="name" required autofocus/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" value="" name="email" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value="" name="password" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password *" value="" name="confirm" required/>
                    </div>
                </div>
            </div>
            <button type="button" class="btnSubmit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

