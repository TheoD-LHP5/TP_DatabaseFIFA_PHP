<?php

require_once "controller/controller_index.php";

?>

<!doctype html>
<html lang="en">
<head>
    <title>FIFA WESH</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container-fluid">

<div class="row d-flex justify-content-center pt-2">
<div class="col-8">
<table class="table">
<legend class="titleTable">j'aime pas le foot</legend>
<thead>
</thead>
<tbody>


    <?php foreach($fifa_data as $key => $value) { ?>
    <tr> 
        <td>
            <img src="data_fifa/images/<?= $fifa_data[$key]['picture'] ?>" alt="" srcset="" class="imgPlayer">
        </td>
        <td>
            <?= $fifa_data[$key]['name'] ?>
        </td>
        <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#p<?= $key ?>">+ d'infos</button>
        </td>
    </tr>

    <?php } ?>
  </tbody>
</table>
</div>
</div>

</div>

<?php foreach($fifa_data as $key => $value) { ?>
<div class="modal fade" id="p<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $fifa_data[$key]['name'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="data_fifa/images/<?= $fifa_data[$key]['picture'] ?>" class="imgPlayerModal" alt="">
        <p>Équipe :<?= $fifa_data[$key]['team'] ?></p>
        <p>Nationalité :<?= $fifa_data[$key]['nationality'] ?></p>
        <p>Numéro :<?= $fifa_data[$key]['number'] ?></p>
        <p>Poste :<?= $fifa_data[$key]['position'] ?></p>
        <p>Âge :<?= $fifa_data[$key]['age'] ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
      
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>