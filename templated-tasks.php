<?php include 'header.php'; ?>
<?php if ($permissions[5] == 1) { ?>
<?php if ($_COOKIE['BMS_Portal']) { ?>
<div class="row">
<div class="create-template-panel">
<div class="template-choice">
<p>Select template from list:</p>
    <select id="template-select">
    <option>Express</option>
    </select>
</div>
<div class="template-content">
    <?php include 'modules/task-templates/express.php'; ?>
</div>
</div>
</div>
<?php } else { 
header('Location: http://portal.businessonmarketst.com/login.php');
}
} ?>

<?php include 'footer.php'; ?>