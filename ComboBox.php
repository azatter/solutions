<?php
    $u = $User->getUserInfoByID($idp);
    // $User - instance of a class 'User'
?>

<select name="SelectCountry">
    <!-- return user's currently selected value of Country -->
    <option value="<?= $u['id_country']; ?>"><?= $u['name_country']; ?></option>

    <?php

    // creating ComboBox with all values of 'countries' table ('value' property stores 'id_country')
    // sql query: ... `id_country` NOT LIKE "u['id_country']" ...
    $cRows = $db->getColumnElements($u['id_country'],'id_country', 'name_country', 'countries');
    foreach($cRows as $c): ?>
        <option value="<?= $c['id_country']; ?>"> <?= $c['name_country']; ?> </option>
    <? endforeach ?>
</select>