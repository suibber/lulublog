<?php

use yii\helpers\Html;
use yii\grid\GridView;
use source\LuLu;
use source\models\Content;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$type='post';
$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
    		[
    		'attribute'=>'id',
    		'headerOptions'=>['style'=>'width:80px;']
    		],
    		
    		'title',
          
    		[
    		'attribute'=>'updated_at',
    		'format'=>'datetime',
    		'headerOptions'=>['style'=>'width:200px;']
    		],
            //'allow_comment',
            //'comments',
    		[
    		'attribute'=>'user_id',
    		'headerOptions'=>['style'=>'width:80px;']
    		],
            [
    			'attribute'=>'comment_count',
    			'headerOptions'=>['style'=>'width:80px;']
			],
    		[
    		'attribute'=>'view_count',
    		'headerOptions'=>['style'=>'width:80px;']
    		],
    		[
    		'attribute'=>'status',
    		'headerOptions'=>['style'=>'width:80px;']
    		],
            // 'diggs',
            // 'burys',
            // 'sticky',
            // 'password',
            // 'visibility',
            //'status',
            // 'thumb',
            // 
            // 'alias',
            // 'excerpt',
            // 'content:ntext',
            // 'content_type',
            // 'template',

            ['class' => 'source\core\grid\ActionColumn'],
        ],
    ]); ?>

</div>
