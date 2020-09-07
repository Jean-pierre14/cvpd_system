<?php if($errors > 0):?>
    <?php foreach($errors AS $error):?>
        <div class="alert alert-warning alert-dismissible fade show">
            <?php print $error; ?>
            <button type="button" data-dismiss="alert" aria-label="Close" class="close btn border-0">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endforeach;?>
<?php endif;?>

<?php if($success > 0):?>
    <?php foreach($success AS $scs):?>
        <div class="alert alert-success alert-dismissible fade show">
            <?php print $scs; ?>
            <button type="button" data-dismiss="alert" aria-label="Close" class="close btn border-0">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endforeach;?>
<?php endif;?>