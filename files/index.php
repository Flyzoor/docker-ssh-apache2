<!DOCTYPE HTML>  
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>  
<div class="container">
<h2>Objavite svojo spletno stran</h2>
<form method="post" action="upload_form.php" enctype="multipart/form-data">  
    <div class="row">
      <div class="col-4">
        <input type="text" name="ime" class="form-control" placeholder="Ime">
      </div>
      <div class="col-4">
        <input type="text" name="priimek" class="form-control" placeholder="Priimek">
      </div>
    </div>
    <div class="form-group row">
        <label for="fileToUpload">Dodajte datoteko</label>
        <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" accept="*.html, *.css, image/*">
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Objavi</button>
        </div>
    </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

