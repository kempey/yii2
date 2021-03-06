<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully installed <b>Podcaster</b> module!</p>

        <p><a class="btn btn-lg btn-success" href="<?=\yii\helpers\Url::toRoute(['podcaster/podcast'])?>">Podcast Management</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-md-4">
                <h2>Manage podcasts</h2>

                <p>Podcaster module support unlimited number of podcasts.</p>

                <p><a class="btn btn-default" href="<?=\yii\helpers\Url::toRoute(['podcaster/podcast'])?>">Podcasts &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>List Podcasts</h2>

                <p>Show publicly available podcasts</p>
                <br/>
                <p><a class="btn btn-default" href="<?=\yii\helpers\Url::toRoute(['podcaster/list'])?>">List &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Stats</h2>

                <p>Check out how your podcasts are received by your audience.</p>

                <p><a class="btn btn-default" href="<?=\yii\helpers\Url::toRoute(['podcaster/stats'])?>">Analytics &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
