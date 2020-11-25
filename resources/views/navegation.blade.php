<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}" style="font: oblique bold 120% cursive; font-size: 48px;">"Quiero A Mi Mascota"</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" style="font: oblique bold 120% cursive;font-size: 30px;" href="{{ url('/productos/perros') }}">Perros<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" style="font: oblique bold 120% cursive;font-size: 30px;" href="{{ url('/productos/gatos') }}">Gatos<span class="sr-only">(current)</span></a>
            </li>     
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" style="font: oblique bold 120% cursive;font-size: 30px;color:beige;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Nosotros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/informacion/mision_y_vision') }}">Misión y Vision</a>               
                <a class="dropdown-item" style="font: oblique bold 120% cursive;" href="{{ url('/informacion/contactos') }}">Contactos</a>
                </div>
            </li>
            </ul>
        </div>
        </nav>