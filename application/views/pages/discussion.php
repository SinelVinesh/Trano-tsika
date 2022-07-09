<?php
foreach ($messages as $message) {
    $class = ($message["id_client_receiver"] == $_SESSION["id_client"]) ? "me" : "you"; ?>
    <li class="<?= $class ?>">
        <div class="notification-event">
            <div class="infos">
                <div class="info-details">
                    <span class="chat-message-item">
                        <?= $message["message_texte"] ?>
                    </span>
                    <span class="notification-date">
                        <time datetime=""
                              class="entry-date updated"><?= displayDate($message["date_envoye"]) ?>
                        </time>
                    </span>
                </div>
            </div>
        </div>
    </li>
<?php } ?>