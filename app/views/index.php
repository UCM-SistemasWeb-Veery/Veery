

        <div id="feed-stream" class="col col-10">
            <div class="row">
                <div class="col col-9">
                    <div id="main" class="module-panel medium">
                        <h2 class="main-title">Red Hot Chili Peppers</h2>
                        <a href="play_live.php" class="btn alternate shadow">Live Session</a>
                        <img src="<?php echo PATH; ?>img/rhcp.jpg">
                    </div>
                </div>

                <div class="col col-3">
                    <div class="feed-card medium">
                        <div class="feed-heading">
                            <img src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/1524845_10154241712765383_1601173067664658885_n.jpg?oh=c9663f9895789582b8d271be9c52d9f1&amp;oe=55A5F107&amp;__gda__=1436292926_d4c391ef13cf7a7026e0236e7813523f" />
                            <button class="btn primary small shadow">Follow</button>
                        </div>
                        <div class="feed-figure shadow">
                            <img class="circle" src="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10468344_10155058468955383_6684116020501828227_n.jpg?oh=3680b46008ae94dcf2ad8e78f2263733&amp;oe=5599B73E&amp;__gda__=1440203841_b50e3c7c5810ff78a7ab6533580947cd" />
                        </div>
                        <div class="feed-body center">
                            <h4 class="feed-header"><a href="artist_view.php">@rafaramirez</a></h4>
                            <p>OMG YOLO LOL</p>
                            <div class="show-on-hover">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus.</p>
                                <div class="social-buttons">
                                    <a href="#" class="btn alternate circle"><span class="fa fa-gears"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-heart"></span></a>
                                    <a href="#" class="btn alternate circle"><span class="fa fa-bullhorn"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                if($data['feed']){
                    $size = array('large', 'medium', 'small');
                    foreach ($data['feed'] as $post) {
                        echo '
                        <div class="col col-4">
                            <div class="feed-card '.$size[array_rand($size, 1)].'">
                                <div class="feed-heading">
                                    <img src="'.$post->userHeader.'" />
                                    <button class="btn primary small shadow">Follow</button>
                                </div>
                                <div class="feed-figure shadow">
                                    <img class="circle" src="'.$post->userProfilePicture.'" />
                                </div>
                                <div class="feed-body center">
                                    <h4 class="feed-header"><a href="'.$post->postSlug.'">@usher</a></h4>
                                    <p>Lulz</p>
                                    <div class="show-on-hover">
                                        <p>'.$post->postContent.'</p>
                                        <div class="social-buttons">
                                            <a href="#" class="btn alternate circle"><span class="fa fa-gears"></span></a>
                                            <a href="#" class="btn alternate circle"><span class="fa fa-heart"></span></a>
                                            <a href="#" class="btn alternate circle"><span class="fa fa-bullhorn"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                }
            ?>
            </div>
        </div>
