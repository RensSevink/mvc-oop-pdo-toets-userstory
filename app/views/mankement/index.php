<?php require(APPROOT . '/views/includes/header.php') ?>
<h3><?= $data['title'] ?></h3>
<h5>Instructeur: <?= $data['instructeurNaam']; ?></h5>
<h5>E-mailadres: <?= $data['email']; ?></h5>
<h5>Kenteken Auto: <?= $data['autoKenteken']; ?>-<?= $data['autoType']; ?></h5>
<table border='1'>
    <thead>
        <th>Datum</th>
        <th>Mankement</th>
    </thead>
    <tbody>
        <?php echo $data['rows'] ?>
    </tbody>
</table>
<?php require(APPROOT . '/views/includes/footer.php') ?>