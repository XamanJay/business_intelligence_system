<!DOCTYPE html>
<html lang="en">
<head>                      
    <title> Business Intelligence System <?php  print date("Y") ; ?> </title>
    <meta charset="utf-8">   
    <meta name="description" content="Business Intelligence">
    <meta name="author" content="| Powered by jaissiel@outlook.com | [( Production/Release -> 270324 )] |">
    <meta name="keywords" content="Business Intelligence">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="{{ asset('images/i_m_a_g_e_s____◣_◢/icons/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/c_s_s____◣_◢/carrusel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/c_s_s____◣_◢/Ollin.css') }}" > 
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" > 
    
    <link href="https://fonts.googleapis.com/css2?family=Griffy&display=swap" rel="stylesheet">    <style>    .font__Griffy {        font-family: 'Griffy', serif;        font-size: 20px;    }    </style>
    

    <!-- React 18 desde CDN -->
    <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>

    <!-- Babel standalone para poder usar JSX (IMPRESCINDIBLE) -->
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<body>

    
    <div style="margin-bottom:0px">
        
       <!--  <img src=" {{  asset('images/i_m_a_g_e_s____◣_◢/BigImages/SELECTED/deseocaribe_razer.jpg')   }}" style="width:100%" height="250"> -->
        
    </div>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		



    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand MOVIMIENTO_DESCENDIENDO" href="/"><img src="{{ asset('images/i_m_a_g_e_s____◣_◢/logo.png') }}" alt="" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link" href="/sales">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dashboards</a>  
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="/">Dashboard 1</a>
                        <a class="dropdown-item" href="/">Dashboard 2</a>
                        <a class="dropdown-item" href="/">Dashboard 3</a>
                    </ul>
                </li> 
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Catalogos</a>  
                <ul class="dropdown-menu">
                    <a class="dropdown-item" href="/employees">Empleados</a>
                    <a class="dropdown-item" href="/xusers">Usuarios</a>
                    
                    
                </ul>
                </li> 
            </ul>
            
            

            </div>
        </div>
        </nav>

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


    @yield('content')



    
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		



<footer class="container-fluid text-center footer-style " style="margin-top:0px">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-4 footer-col">
                <h3>&nbsp;</h3>
                <p> &nbsp;    </p>
            </div>
                <div class="col-md-4 footer-col">
                <h3>&nbsp;</h3>
                <p>&nbsp; </p>
                <p> &nbsp;	</p>
            </div>
            <div class="col-md-4 footer-col">
                <h3>&nbsp; </h3>
                <p>Departamento: Business Intelligence </p>
                <p> &copy; <?php  print date("Y") ; ?> </p> 
                
                <p></p>
                <!--<audio controls autoplay>
                        <source src="i_m_a_g_e_s____◣_◢/30 - Castlevania - Track 30.mp3" type="audio/mpeg">
                        
                        Your browser does not support the audio element.
                    </audio>
                -->
            </div>
           
            
        </div>
        
    </div>
    </footer>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		




</body>
</html>



<!--+----------+litepicker calendar----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<script src="{{ asset('js/moment.min.js')}}"></script>
<script>
    //document.getElementById("demo").innerHTML = complete_date;
   //document.getElementById("demo").innerHTML = moment() ; 
    const picker = new Litepicker(
        {           element: document.getElementById('litepicker1') ,
                    singleMode: true,
                    format: 'DD-MM-YYYY',
                    resetButton: true,
                    Default: false,
                    minDate: moment().format()
    });
    
</script>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		


<script type="text/javascript" language="Javascript">  // document.oncontextmenu = function(){return false}  </script>

<!-- ▌│║-٩͡[๏̯͡๏]۶-███ ¯\_(ツ)_/¯ ▒░░░░▒▓▒░░░░▒▓▒░░░░▒▓▒░░░░▒▓▒░░░░▒▓▒░░░░▒▓▒░░░░▒▓███-*´¨)◣_◢ ٩(●̮̮̃•̃)۶ ٩[๏̯͡๏]۶ ║▌║││█║▌ ║▌║││█║▌ ║▌║││█║▌ ║▌║││█║▌ ║▌║││█║▌ ║▌║││█║▌ ║▌║││█║▌ ║▌║││█║▌ 


****     **** ******** **     ** **   ******    *******         
/**/**   **/**/**///// //**   ** /**  **////**  **/////**       
/**//** ** /**/**       //** **  /** **    //  **     //**      
/** //***  /**/*******   //***   /**/**       /**      /**      
/**  //*   /**/**////     **/**  /**/**       /**      /**      
/**   /    /**/**        ** //** /**//**    **//**     **       
/**        /**/******** **   //**/** //******  //*******        
//         // //////// //     // //   //////    ///////         


-->