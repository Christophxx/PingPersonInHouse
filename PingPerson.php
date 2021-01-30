<script type="text/javascript">
      function re_load() {
        window.document.location.reload();
      }
      setTimeout("re_load()",300000);
</script>

<?php

$offline = '<p style="color: red; font-weight: bold" class="card-text">Person ist Offline!</p>';
$online = '<p style="color: green; font-weight: bold" class="card-text">Person ist Online!</p>';

$FilterOne = "(100% Verlust),";
$FilterTwo = "(0% Verlust),";

$BlockSize = "30rem";

$IpPersone = "192.168.XXX.XXX";
$StatusPerson=exec("ping $IpPersone -n 1");

if(strpos($StatusPerson, $FilterOne) || strpos($StatusPerson, $FilterTwo)){
    $Person = $offline;
} else{
    $Person = $online;
}

?>

<br><br>

<div class="container">
    <div class="row">
        <p>Letzes Update : <?= date("H:i"); ?></p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="width: <?= $BlockSize ?>;">
                <img class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title" style="text-decoration: underline" 
                    data-toggle="tooltip" data-placement="top" title="<?= $StatusPerson ?>"> PERSON NAME </h5>
                    <p class="card-text">Onlinestatus von : <?= $IpPersone ?></p>
                    <?= $Person ?>
                </div>
            </div>
        </div>
    </div>
<div>
