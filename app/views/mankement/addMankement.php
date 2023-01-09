<?php require(APPROOT . '/views/includes/header.php') ?>
<h3><?= $data['title'] ?></h3>


<form action="<?= URLROOT ?>/mankementen/addMankement" method="post">
    <label for="Mankement">Invoeren Mankement</label><br>
    <input type="text" name="Mankement" id="Mankement">
    <!-- <div class="topicError">Meer dan 255 characters</div> -->
    <br> <br>
    <input type="hidden" name="AutoId" value="<?= $data['AutoId']; ?>">
    <input type="submit" value="Voer in">
</form>
<?php require(APPROOT . '/views/includes/footer.php') ?>