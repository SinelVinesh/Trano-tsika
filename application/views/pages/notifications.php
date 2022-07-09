
<?php foreach ($notifications as $notif) { ?>
    <li>
        <a href="" title="">
            <img src="<?=base_url() ?>assets/images/resources/thumb-1.jpg" alt="">
            <div class="mesg-meta">
                <h6><?= $notif["first_name"]." ".$notif["last_name"] ?></h6>
                <?php if ($notif['type'] == 'commentaire') { ?>
                    <span>a commente la publication "<?= $notif['description'] ?>"</span>
                <?php } else { ?>
                    <span>a envoye: "<?= $notif['description'] ?>"</span>
                <?php } ?>

                <i><?= displayDate($notif['date_envoye']) ?></i>
            </div>
        </a>
        <span class="tag green">New</span>
    </li>
<?php } ?>
