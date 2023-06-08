<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="/img/fav_icon.png">
  <title>Reservation Direct</title>
  <link rel="stylesheet" href="{{ url('css/responsable/reservation_direct_respo.css') }}">
</head>

<body>
  <div class='left-responsable'>
    <div class='logo-responsable'>
      <img src="{{ url('img/ismontic_biblio_logo.png') }}" alt="" srcset="" width='200' />
    </div>
    <div class="headerLinks">
      <a href="{{ route("reserver") }}" class=' header-btn'>Dashboard</a>
      <a href="{{ route("login_respo") }}" class=' header-btn logout'>Logout</a>
    </div>
  </div>
  <div class="reserver">


    <div class="reserver-panal">
      <div class="left-img">
        <img src="/img/reservation_direct.jpg" alt="" srcset="" />
      </div>
      <div class="right">
        <div class="revesion-title">
          <span class="title">Résérvation</span>
          <span class="calandericon">
            <img src="/img/calandericon.png" alt="" srcset="" width="50px" />
          </span>
        </div>
        <form action="">
          <input type="text" name="id_stagiaire" id="id_stagiaire" placeholder="ID Stagiair(e)" />
          <input type="text" name="name" id="name" placeholder="Nom Utilisateur / Utilisatrice" />
          <input type="text" name="titre_livre" id="titre_livre" placeholder="Titre de Livre" />
          <input type="date" name="date" id="date" placeholder="Date de  résérvation" />

          <select name="jour" id="jour" class="selectInput">
            <option value="3">3 jours</option>
            <option value="7">7 jours</option>
            <option value="10">10 jours</option>
          </select>

          <button type="submit" class="submit-btn" href="/dashbord">
            submit
          </button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>