<?php
    foreach ($discussions as $discu) {
        $lastMessage = $discu["lastMessage"];
        $isMe = $lastMessage["id_client_sender"] == $_SESSION['id_client'];
?>
    <li>
        <a class="discussion" pub-id="<?= $discu["id_publication"] ?>" another="<?= $discu["another"] ?>" >
            <img src="<?= base_url() ?>assets/images/resources/thumb-1.jpg" alt="">
            <div class="mesg-meta">
                <h6><?= $lastMessage["last_name_receiver"]. " " . $lastMessage["first_name_receiver"]?></h6>
                <span><?= ($isMe ? "vous: " : ""). $lastMessage["message_texte"] ?></span>
                <i><?= displayDate($lastMessage["date_envoye"]) ?></i>
            </div>
        </a>
        <!--                                    <span class="tag green">New</span>-->
    </li>
<?php } ?>