<?php require(APPROOT . '/views/includes/header.php') ?>
<h3><?= $data['title'] ?></h3>


<form action="<?= URLROOT ?>/wagenparken/addKmstand" method="post">
    <label for="KmStand">KmStand</label><br>
    <input type="text" name="KmStand" id="KmStand">
    <!-- <div class="topicError">Meer dan 255 characters</div> -->
    <br> <br>
    <input type="hidden" name="AutoId" value="<?= $data['AutoId']; ?>">
    <input type="submit" value="Toevoegen">
</form>
<?php require(APPROOT . '/views/includes/footer.php') ?>