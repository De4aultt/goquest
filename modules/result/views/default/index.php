<section class="profile">
    <div class="bgs"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 profile_wrap">
<?php
/* @var $this yii\web\View */
use app\models\Results;
use app\models\User;

$request = Yii::$app->request;
$id = $request->get('key1');
$quest = $request->get('key2');
$success = $request->get('key3');
$multipliers = $request->get('key4');

//var_dump($id);die();
if(!is_null($id) && !is_null($quest) && !is_null($success) && !is_null($multipliers) ) {

    $devider = 0;
    $key = 0;
    while($multipliers !== $key) {
        global $devider;
        $devider = rand(1, 1000);
        $key = sha1($devider);

    }

    $id = $id / $devider;
    $quest = $quest/ $devider;
    $success = $success - $devider;

    $result = new Results();
    $result->player_id = $id;
    $data = new DateTime();
    $result->data = $data->format('Y-m-d');
    $result->quest_id = $quest;
    $result->success = $success;
    $points = 0;
    if ($success == 1) {
        switch ($quest) {
            case (1):
                $points = 100;
                break;
            case (2):
                $points = 50;
                break;
            case (3):
                $points = 200;

        }
        $result->points = $points;
    }
    if ($success != 0) {
         $user = User::find()->where(['id'=> $id])->one();
         $user->rating= $user->rating + $points;
        $user->quests= $user->quests + 1;
        //var_dump($user->rating); die();
         $user->save();
    echo('<h1>Вітаємо, ви пройшли квест, вам нараховано ');
    echo($points);
    echo(' points</h1> ');
    }
    else {
        echo('<h1>На жаль, ви не пройшли квест, спробуйте ще!</h1>');
        $user = User::find()->where(['id'=> $id])->one();
        $user->failed= $user->failed + 1;

        $user->save();
    }

     $result->save();


} else {
    echo('<h1>Упс, сталася помилка </h1>');

}
?>
            </div>
        </div>
    </div>
</section>