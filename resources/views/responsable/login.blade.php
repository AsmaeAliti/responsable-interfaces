<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="/img/fav_icon.png">
  <title>Login</title>
  <link rel="stylesheet" href="{{ url('css/responsable/login.css') }}">
</head>
<body>
  <div class='login'>



    <div class='logo'>
      <img src="{{ url('img/ismontic_biblio_logo.png') }}" alt="" srcset="" width='200' />

    </div>


    <div class='login-panel'>

      <div class='title-inscrire-icon'>

        <span class='title-inscrire'>Connexion</span>
        <span class='inscrire-icon'>

          <img src="{{ url('img/login_responsable.icon.png') }}" alt="" srcset="" width="55" height="55" />

        </span>
      </div>
      <div class='inputs'>

        <input type="text" placeholder='Pseudo responsable' name='cef' />
        <input type="text" placeholder='Mot de Passe responsable ' name='password' />

        <a href={{'/dashboard_responsable'}} class='login-btn-responsable btn-submit-responsable'>
          Submit
        </a>
      </div>
    </div>
  </div>
</body>

</html>