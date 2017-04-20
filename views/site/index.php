<?php

/* @var $this yii\web\View */

$this->title = 'АІС Майстерня картин';
?>


<div class="site-index">


<?php if(Yii::$app->user->isGuest) {
    ?>
    <p>Пройдіть <a href="/site/login">аутентифікацію</a> та оберіть категорію:</p>
    <?php
}else{ ?>
    <p><?= \Yii::$app->user->identity->fullname?> , оберіть категорію:</p>
<?php
}
    ?>
    <ul>
        <li><a href="/managers">Менеджери</a></li>
        <li><a href="/designers">Дизайнери</a></li>
        <li><a href="/pictures">Картини</a></li>
        <li><a href="/orders">Замовлення</a></li>
        <li><a href="/cheks">Чеки</a></li>
        <li><a href="/clients">Клієнти</a></li>
        <li><a href="/phones">Номери телефонів</a></li>
    </ul></div>
<div class="jumbotron">
    <br>
    <p>   НАЦІОНАЛЬНИЙ УНІВЕРСИТЕТ "КИЄВО-МОГИЛЯНСЬКА АКАДЕМІЯ"
        <br>

        ФАКУЛЬТЕТ ІНФОРМАТИКИ
        <br>
        Самостійна робота з дисципліни:
        <br>
        «Бази даних та інформаційні системи»
        <br>
        Розробка АІС «Майстерня картин»
        <br>
        Виконав: студент - групи ---------
        <br>
        Викладач: ---------</p>
</div>
</div>
