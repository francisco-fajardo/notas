<?php
// Configuración opcional: define el año escolar (ej. "2020 - 2021"). Si no está definida, es null o vacía, se calcula automáticamente.
$schoolYear = $schoolYear ?? "2026 - 2027";
?>
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
  <meta name="description" content="Formamos estudiantes con miras al éxito de un país productivo" />
  <meta name="keywords" content="francisco fajardo, fajardo, escuela tecnica, caricuao, liceo" />

  <link rel="canonical" href="<?php echo (!empty($_SERVER["HTTPS"])
      ? "https"
      : "http") .
      "://" .
      $_SERVER["HTTP_HOST"] .
      $_SERVER["REQUEST_URI"]; ?>" />

  <!-- Open Graph / Facebook SEO Tags -->
  <meta property="og:image" content="https://franciscofajardo.com/img/logo.png" />
  <meta property="og:title" content="Notas - E.T. &quot;Francisco Fajardo&quot;" />
  <meta property="og:description" content="Formamos estudiantes con miras al éxito de un país productivo" />
  <meta property="og:locale" content="es_VE" />
  <meta property="og:site_name" content="E.T. &quot;Francisco Fajardo&quot;" />
  <meta property="og:url" content="<?php echo (!empty($_SERVER["HTTPS"])
      ? "https"
      : "http") .
      "://" .
      $_SERVER["HTTP_HOST"] .
      $_SERVER["REQUEST_URI"]; ?>" />
  <meta property="og:type" content="school" />

  <!-- Twitter SEO Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="https://franciscofajardo.com/img/logo.png" />
  <meta name="twitter:title" content="Notas - E.T. &quot;Francisco Fajardo&quot;" />
  <meta name="twitter:description" content="Formamos estudiantes con miras al éxito de un país productivo" />
  <meta name="twitter:url" content="<?php echo (!empty($_SERVER["HTTPS"])
      ? "https"
      : "http") .
      "://" .
      $_SERVER["HTTP_HOST"] .
      $_SERVER["REQUEST_URI"]; ?>" />

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

  <!-- Web App Manifest -->
  <link rel="manifest" href="site.webmanifest" />

  <!-- Styles -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" integrity="sha512-8ou7fcyycqNuFpv9eBUT7lvFnZ/tHM7Of3qOCjxPYKBUYYuQdrbJnWH61dAez1M2p3C42GKN1m6xc/UQgfdo0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/dist/style.css" />

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <nav class="white z-depth-1">
    <div class="nav-wrapper container">
      <a href="https://franciscofajardo.com/notas/" class="brand-logo center valign-wrapper" style="height: 100%;">
        <img src="img/logo-franciscofajardo.png" alt="E.T. Francisco Fajardo" style="height: 42px; width: auto; vertical-align: middle; margin-right: 8px;" />
        <span class="grey-text text-darken-3" style="font-size: 1.3rem; font-weight: 600;">Notas</span>
      </a>
    </div>
  </nav>

  <main>
    <div class="container">
      <div class="center">
        <h1 style="margin-bottom:8px">Notas</h1>

        <div class="row">
            <div class="col s6">
                <p class="grey-text text-darken-2" style="margin-top:0">
                    <span class="d-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <?php echo !empty($schoolYear)
                        ? $schoolYear
                        : date("Y", strtotime("-1 year")) .
                            " - " .
                            date("Y"); ?>
                </p>
            </div>

            <div class="col s6">
                <p class="grey-text text-darken-2" style="margin-top:0">
                    <span class="d-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                    </span>
                    Definitivas (1er momento)
                </p>
            </div>
        </div>

<?php
$files = array_filter(scandir(__DIR__ . "/img/notas/"), function ($file) {
    return $file !== "." && $file !== ".." && !preg_match("/^\..*/", $file);
});
?>

<?php if (empty($files)): ?>
        <div class="card-panel grey lighten-4 z-depth-0" style="border-radius: 12px; padding: 3rem 1.5rem; margin: 2rem 0; border: 1px dashed #bdbdbd;">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="grey-text text-darken-1" style="display: block; margin: 0 auto 1rem auto;">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
            <polyline points="14 2 14 8 20 8"></polyline>
            <line x1="16" y1="13" x2="8" y2="13"></line>
            <line x1="16" y1="17" x2="8" y2="17"></line>
            <polyline points="10 9 9 9 8 9"></polyline>
          </svg>
          <p class="flow-text grey-text text-darken-3" style="font-size: 1.25rem; font-weight: 500; margin: 0;">
            No hay notas publicadas disponibles para este momento
          </p>
        </div>
<?php else: ?>
        <ul class="collapsible">
<?php foreach ($files as $file) {
    $exploded = explode(".", $file);

    $year = $exploded[0];
    $career = ucfirst(str_replace("-", " ", $exploded[1]));
    $section = strtoupper($exploded[2]);

    $title = "{$year} {$career} \"{$section}\"";
    $altImage = "{$year} {$career} &quot;{$section}&quot;";
    $url = "img/notas/" . $file;
    ?>
          <li>
            <div class="collapsible-header"><?php echo $title; ?></div>
            <div class="collapsible-body">
              <a href="<?php echo $url; ?>" title="<?php echo "Notas de " .
    $altImage; ?>">
                  <img data-src="<?php echo $url; ?>" alt="<?php echo "Notas de " .
    $altImage; ?>" class="lazy" />
              </a>
            </div>
          </li>
<?php } ?>
        </ul>
<?php endif; ?>
        </div>
    </div>
  </main>

  <footer class="page-footer white z-depth-1" style="border-top: 1px solid #e0e0e0;">
    <div class="container">
      <div class="row valign-wrapper" style="flex-wrap: wrap;">
        <div class="col l6 s12">
          <div class="valign-wrapper" style="margin-bottom: 0.8rem;">
            <img src="img/logo-franciscofajardo.png" alt="E.T. Francisco Fajardo" style="height: 48px; width: auto; margin-right: 12px;" />
            <h5 class="grey-text text-darken-3" style="margin: 0; font-size: 1.3rem; font-weight: 600;">E.T. "Francisco Fajardo"</h5>
          </div>
          <p class="grey-text text-darken-1">Formamos estudiantes con miras al éxito de un país productivo.</p>
        </div>

        <div class="col l4 offset-l2 s12">
          <h5 class="grey-text text-darken-3" style="font-size: 1.1rem; font-weight: 600;">Contacto</h5>
          <ul>
            <li>
              <a class="grey-text text-darken-1 valign-wrapper footer-link" href="https://www.facebook.com/groups/555209544587295" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px; flex-shrink: 0;"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook
              </a>
            </li>
            <li>
              <a class="grey-text text-darken-1 valign-wrapper footer-link" href="https://twitter.com/francis90515194" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 8px; flex-shrink: 0;"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>Twitter / X
              </a>
            </li>
            <li>
              <a class="grey-text text-darken-1 valign-wrapper footer-link" href="https://github.com/francisco-fajardo" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px; flex-shrink: 0;"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>GitHub
              </a>
            </li>
            <li>
              <a class="grey-text text-darken-1 valign-wrapper footer-link" href="mailto:contacto@franciscofajardo.com">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px; flex-shrink: 0;"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>Correo
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-copyright center white grey-text text-darken-1" style="border-top: 1px solid #f0f0f0;">
      <div class="container">
        &copy; 2020 - <?php echo date("Y"); ?> E.T. "Francisco Fajardo"
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.3.0/lazyload.min.js" integrity="sha512-lVcnjCLGjJTaZU55wD7H3f8SJVi6VV5cQRcmGuYcyIY607N/rzZGEl90lNgsiEhKygATryG/i6e5u2moDFs5kQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js" integrity="sha512-OYtVuAy6KSuCAf0HG9j12VF96ehWm00yWBkYAqwzOkGV4WLPCWlOY1q1C3Mr4ouohyL5vEPqTulTyDlT7AHoGQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/dist/runtime.js"></script>
  <script src="js/dist/main.js"></script>
</body>

</html>
