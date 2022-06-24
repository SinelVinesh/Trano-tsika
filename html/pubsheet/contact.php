<div class="modal fade" id="modalContact<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="modalContactTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalContactTitle">Client<?php echo $id ?></h5>
                <a type="button" class="close<?php echo $id ?>" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <h6>Andoharanofotsy Room <?php echo $id ?></h6>
                <hr />
                <div class="chat-list">
                    <ul id="onemessagecontact<?php echo $id ?>">
                        <li class="me">
                            <div class="chat-thumb"><img src="../images/resources/chatlist1.jpg" alt=""></div>
                            <div class="notification-event">
                                <span class="chat-message-item">
                                    Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                </span>
                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                        <li class="you">
                            <div class="chat-thumb"><img src="../images/resources/chatlist2.jpg" alt=""></div>
                            <div class="notification-event">
                                <span class="chat-message-item">
                                    Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                </span>
                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                        <li class="me">
                            <div class="chat-thumb"><img src="../images/resources/chatlist1.jpg" alt=""></div>
                            <div class="notification-event">
                                <span class="chat-message-item">
                                    Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                </span>
                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                        <li class="you">
                            <div class="chat-thumb"><img src="../images/resources/chatlist2.jpg" alt=""></div>
                            <div class="notification-event">
                                <span class="chat-message-item">
                                    Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                </span>
                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                    </ul>
                    <form>
                        <div class="row">
                            <div class="col-10 text-box">
                                <textarea placeholder="your message ..." id="corpscontact<?php echo $id ?>"></textarea>
                            </div>
                            <div class="col-2 align-items-center justify-content-center my-auto">
                                <span id="sendcontact<?php echo $id ?>" class="align-middle"><i class="fa fa-paper-plane"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>