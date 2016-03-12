<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Authentification DPP</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
            body {
        padding-top: 100px;
        background-color: #f8f8f8;
    }

    @media(min-width:768px) {
        body {
            padding-top: 50px;
        }
    }
    .login-panel {
    margin-top: 25%;
    }

    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Authentification</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="controller/Connexion_controller.class.php?control=login_admin" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Identifiant" name="login" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mot de passe" name="motdepasse" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Se rappeler de moi
                                    </label>
                                </div>
                                
                                <input type="submit" class="btn btn-primary btn-block" value="Se connecter">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
