<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="/img/fav_icon.png">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ url('css/responsable/dashboard.css') }}">
  @yield("style")
</head>
<body>
  <div class='Dashbord_responsable'>
    <div class='left-responsable'>
        <div class='logo-responsable'>
          <img src="{{ url('img/ismontic_biblio_logo.png') }}" alt="" srcset="" width='200' />
        </div>
        <div class="headerLinks">
          <a href="{{ route("reservation_direct_respo") }}" class=' header-btn'>Reservation Direct</a>
          <a href="{{ route("login_respo") }}" class=' header-btn logout'>Logout</a>
        </div>
    </div>

    <div class='search'>

        <input type="text" name='cef' placeholder='Entrez Le CEF DE Stagiaire'/>
        

    </div>

  
    <div class='responsable-btn'>

        <a href="{{ route('historique') }}" class='button Historique'>Historique</a>
        <a href="{{ route('reserver') }}" class='button Reserver'>Réserver</a>
        <a href="{{ route('aRetourner') }}" class='button aRetourner'>A Retourner</a>

    </div>


  
    @yield('tableContent')

    
        
    </div>
</div>
</body>
</html>