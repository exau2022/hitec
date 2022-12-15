<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Bootstrap 4.2 - Saisie de fichier (File browser) - Trucsweb.com</title>
    <style>
    .custom-file-input ~ .custom-file-label:lang(fr)::after {
      content: "Choisir...";
    }
    .custom-file-input ~ .custom-file-label:lang(es)::after {
      content: "Elegir...`";
    }
    </style>
  </head>
  <body>
    <h1>Bootstrap 4.2 - Saisie de fichier (File browser)</h1>
    <form method="post" name="oTeleversement" id="oTeleversement" action="script.php" enctype="multipart/form-data">
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="hFichier" name="hFichier" lang="fr" accept=".jpg,.jpeg,.gif,.png" />
      <label class="custom-file-label" for="hFichier">Sélectionner un fichier</label>
    </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script>
      $("input[type=file]").change(function (e){$(this).next('.custom-file-label').text(e.target.files[0].name);})
    </script>
  </body>
</html>