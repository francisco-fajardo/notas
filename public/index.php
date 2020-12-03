<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Robots tags -->
  <meta name="robots" content="noindex" />
  <meta name="googlebot" content="noindex" />
  <meta name="googlebot-news" content="noindex" />
  <meta name="bingbot" content="noindex" />

  <!-- Browserconfig -->
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" content="icons/ms-icon-144x144.png" />

  <meta name="theme-color" content="#ffffff" />

  <title>Notas - E.T. "Francisco Fajardo"</title>

  <!-- SEO Tags -->
  <meta name="author" content="E.T. &quot;Francisco Fajardo&quot;" />
  <meta name="description" content="Creamos estudiantes con miras al éxito de un país productivo" />
  <meta name="keywords" content="francisco fajardo, fajardo, escuela tecnica, caricuao, liceo" />

  <link rel="canonical" href="https://franciscofajardo.com/notas/" />

  <!-- Open Graph / Facebook SEO Tags -->
  <meta property="og:image" content="https://franciscofajardo.com/img/logo.png" />
  <meta property="og:title" content="Notas - E.T. &quot;Francisco Fajardo&quot;" />
  <meta property="og:description" content="Creamos estudiantes con miras al éxito de un país productivo" />
  <meta property="og:locale" content="es_VE" />
  <meta property="og:site_name" content="E.T. &quot;Francisco Fajardo&quot;" />
  <meta property="og:url" content="https://franciscofajardo.com/notas/" />
  <meta property="og:type" content="school" />

  <!-- Twitter SEO Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="https://franciscofajardo.com/img/logo.png" />
  <meta name="twitter:title" content="Notas - E.T. &quot;Francisco Fajardo&quot;" />
  <meta name="twitter:description" content="Creamos estudiantes con miras al éxito de un país productivo" />
  <meta name="twitter:url" content="https://franciscofajardo.com/notas/" />

  <!-- Favicon's -->
  <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png" />
  <link rel="icon" sizes="192x192" href="icons/android-icon-192x192.png" />
  <link rel="icon" sizes="32x32" href="icons/favicon-32x32.png" />
  <link rel="icon" sizes="96x96" href="icons/favicon-96x96.png" />
  <link rel="icon" sizes="16x16" href="icons/favicon-16x16.png" />
  <link rel="shortcut icon" href="favicon.ico" />

  <!-- Manifest -->
  <link rel="manifest" href="manifest.webmanifest" />

  <!-- Styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/dist/style.css" />

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha512-UDJtJXfzfsiPPgnI5S1000FPLBHMhvzAMX15I+qG2E2OAzC9P1JzUwJOfnypXiOH7MRPaqzhPbBGDNNj7zBfoA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js" integrity="sha512-qWVvreMuH9i0DrugcOtifxdtZVBBL0X75r9YweXsdCHtXUidlctw7NXg5KVP3ITPtqZ2S575A0wFkvgS2anqSA==" crossorigin="anonymous"></script>
  <![endif]-->
</head>

<body>
  <nav class="indigo darken-2">
    <div class="nav-wrapper container">
      <a href="https://franciscofajardo.com/notas/" class="brand-logo center">
        <img src="img/covid.png" />
      </a>
    </div>
  </nav>

  <main>
    <div class="container">
      <div class="center">
        <h1>Notas</h1>
      </div>

      <ul class="collapsible">
<?php foreach (new DirectoryIterator(__DIR__ . "/img/notas/") as $file) {

    if ($file->isDot()) {
        continue;
    }

    $filename = $file->getFilename();
    $exploded = explode(".", $filename);

    $year = $exploded[0];
    $career = str_replace("-", " ", $exploded[1]);
    $section = $exploded[2];

    $courseName = $year . " " . $career . " &quot;" . $section . "&quot;";
    $url = "img/notas/" . $filename;
    ?>
        <li>
          <div class="collapsible-header"><?php echo $courseName; ?></div>
          <div class="collapsible-body"><img data-src="<?php echo $url; ?>" alt="<?php echo "Notas del " .
    $courseName; ?>" class="lazy" /></div>
        </li>
<?php
} ?>
      </ul>
    </div>
  </main>

  <footer class="page-footer indigo darken-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">E.T. "Francisco Fajardo"</h5>
          <p class="grey-text text-lighten-4">Creamos estudiantes con miras al éxito de un país productivo</p>
        </div>

        <div class="col l4 offset-l2 s2">
          <h5 class="white-text">Contacto</h5>
          <ul>
            <li><a href="https://www.facebook.com/groups/555209544587295">Facebook</a></li>
            <li><a href="https://twitter.com/francis90515194">Twitter</a></li>
            <li><a href="https://github.com/francisco-fajardo">GitHub</a></li>
            <li><a href="mailto:contacto@franciscofajardo.com">Correo</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-copyright center">
      <div class="container">
        &copy; 2020 E.T. "Francisco Fajardo"
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.1.3/lazyload.min.js" integrity="sha512-V3DZ9ZAJrv8ZYY5Zarlfjusec9J6S8htRT3bJDKTdEgq0g9OhbHQUjK+vsBkE6CH0J5VJtBCzPSXJ0ZCVpjPdQ==" crossorigin="anonymous"></script>
  <script src="js/dist/runtime.js"></script>
  <script src="js/dist/main.js"></script>
</body>

</html>
