<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Elève</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="vendor/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet"/>
</head>

<body>
  
  <form class="form-horizontal">
    <fieldset>

      <!-- Form Name -->
      <legend>Créer un élève</legend>


      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nom de l'élève</label>
        <div class="col-md-4">
          <input id="textinput" name="textinput" placeholder="nom de l'élève" class="form-control input-md" type="text">
          <span class="help-block">Indiquez ici le nom de l'élève</span>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Promotion</label>
        <div class="col-md-4">
          <select id="selectbasic" name="selectbasic" class="form-control">
            <option value="1">Aron Swartz</option>
            <option value="2">Jimmy Wales</option>
          </select>
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
          <button id="singlebutton" name="singlebutton" class="btn btn-primary">Sauvegarder</button>
        </div>
      </div>

    </fieldset>
  </form>




</body>
</html>
