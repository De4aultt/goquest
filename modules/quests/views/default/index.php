<section class="quest">
    <h1><span>КВЕСТИ</span> НА БУДЬ-ЯКИЙ СМАК</h1>
    <div class="information_q black_style">
        <div class="container">
            <div class="row">
                <div class="col-md-6 righted">
                    <h2>"Чорний <span>пістолет</span>"</h2>
                    <p>Локація: <span>Київ</span></p>
                    <p>Складність: <span>середня</span> </p>
                    <p>Винагорода: <span>100 points </span></p>
                    <h3><span>Опис</span> квесту:</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quasi quidem, dolores hic sit amet veritatis modi molestias debitis suscipit, eveniet quisquam. Laudantium est in nisi voluptatibus odio temporibus vitae ratione, magnam. Voluptas est laborum quos debitis eius recusandae enim natus blanditiis cum quaerat odit aut, commodi, repellendus nisi ipsa.
                    </p>
                </div>
                <div class="col-md-6 lefted">
                    <img src="img/mainpage.jpg">
                </div>
            </div>
        </div>
        <?php
        if (!\Yii::$app->devicedetect->isMobile()) {
            if(!Yii::$app->user->isGuest) {
                $user_id = \Yii::$app->user->identity->id;
                $java_url = 'https://javaleha.com/index?key1='.sha1($user_id).'+key2='.sha1(1);


                $multipliers = rand(1, 1000);
                $id = $user_id * $multipliers;
                $quest_id = 1 * $multipliers;
                $success = 1 + $multipliers;
                $multipliers = sha1($multipliers);

                $java_url = 'https://go-quest.000webhostapp.com/result/default/index?key1='.$id.'&key2='.$quest_id.'&key3='.$success.'&key4='.$multipliers;



                ?>
                <a href="<?=$java_url?>" class="button margined">Почати гру</a>




                <?php
            } else {
                $java_url = 'login';

                ?>
                <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/login'])?>" class="button margined">Необхідно авторизуватись</a>
                <?php
            }
        } else{ ?>
            <a class="button margined">Необхідний пристрій з GPS</a>
        <?php } ?>
    </div>
    <div class="information_q light_style">
        <div class="container">
            <div class="row">
                <div class="col-md-6 righted">
                    <img src="img/second_quest.png">
                </div>
                <div class="col-md-6 lefted">
                    <h2>"Мандрівка у <span>місто</span>"</h2>
                    <p>Локація: <span>Київ</span></p>
                    <p>Складність: <span>легкий</span> </p>
                    <p>Винагорода: <span>50 points </span></p>
                    <h2><span>Опис</span> квесту:</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quasi quidem, dolores hic sit amet veritatis modi molestias debitis suscipit, eveniet quisquam. Laudantium est in nisi voluptatibus odio temporibus vitae ratione, magnam. Voluptas est laborum quos debitis eius recusandae enim natus blanditiis cum quaerat odit aut, commodi, repellendus nisi ipsa.
                    </p>
                </div>

            </div>
        </div>

        <?php
        if (\Yii::$app->devicedetect->isMobile()) {
            if(!Yii::$app->user->isGuest) {
                $user_id = \Yii::$app->user->identity->id;
                $java_url = 'https://javaleha.com/index?id='.sha1($user_id).'+questid='.sha1(2);


                ?>
                <a href="<?=$java_url?>" class="button margined">Почати гру</a>
                <?php
            } else {
                $java_url = 'login';

                ?>
                <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/login'])?>" class="button margined">Необхідно авторизуватись</a>
                <?php
            }
        } else{ ?>
            <a class="button margined">Необхідний пристрій з GPS</a>
        <?php } ?>

    </div>
    <div class="information_q black_style">
        <div class="container">
            <div class="row">
                <div class="col-md-6 righted">
                    <h2>"Незарах <span>в Могилянці</span>"</h2>
                    <p>Локація: <span>Київ</span></p>
                    <p>Складність: <span>висока</span> </p>
                    <p>Винагорода: <span>200 points </span></p>
                    <h3><span>Опис</span> квесту:</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quasi quidem, dolores hic sit amet veritatis modi molestias debitis suscipit, eveniet quisquam. Laudantium est in nisi voluptatibus odio temporibus vitae ratione, magnam. Voluptas est laborum quos debitis eius recusandae enim natus blanditiis cum quaerat odit aut, commodi, repellendus nisi ipsa.
                    </p>
                </div>
                <div class="col-md-6 lefted">
                    <img src="img/third_quest.jpg">
                </div>
            </div>
        </div>

        <?php
        if (\Yii::$app->devicedetect->isMobile()) {
            if(!Yii::$app->user->isGuest) {
                $user_id = \Yii::$app->user->identity->id;
                $java_url = 'https://javaleha.com/index?id='.sha1($user_id).'+questid='.sha1(3);
                ?>
                <a href="<?=$java_url?>" class="button margined">Почати гру</a>
                <?php
            } else {
                $java_url = 'login';

            ?>
            <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/login'])?>" class="button margined">Необхідно авторизуватись</a>
            <?php
            }
        } else{ ?>
            <a class="button margined">Необхідний пристрій з GPS</a>
        <?php } ?>

    </div>


</section>



