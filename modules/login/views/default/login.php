<?phpuse yii\helpers\Html;?><section class="profile">    <h1>Увійти за допомогою:</h1>    <div class="container">        <div class="row"><?= yii\authclient\widgets\AuthChoice::widget([    'baseAuthUrl' => ['default/auth'],  //  'popupMode' => false,    'autoRender' => false]) ?>            <a class="vkontakte auth-link" href="/login/default/auth?authclient=vkontakte" title="VKontakte">                <span class="auth-icon vkontakte" ></span>            </a>            <a class="google auth-link" href="/login/default/auth?authclient=google" title="Google">                <span class="auth-icon google" ></span>            </a>            <a class="facebook auth-link" href="/login/default/auth?authclient=facebook" title="Facebook">                <span class="auth-icon facebook" ></span>            </a>        </div>    </div></section>