<?php
use yii\helpers\Url;
use yii\helpers\Html;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
     //   [
       // 'class'=>'\kartik\grid\DataColumn',
       // 'attribute'=>'Id',
       // 'label'=>'Id',
     //],
    /* [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'city',
        //'label'=>'city',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'area',
        //'label'=>'area',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'suroffice',
        //'label'=>'suroffice',
    ], */
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'community',
        //'label'=>'community',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'village',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'house_id',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'huzhu',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'name',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'sex',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'birthday',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'age',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'identity_id',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'nation',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'residence',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'ryxz',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'jkzt',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'zzmm',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'whcd',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'profession',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'ylbxkh',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'ylbxzh',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'dmzh',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'remove',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'phone',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'address',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'address_now',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'remark',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'create_time',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'update_time',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'create_user',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'update_user',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) {
                return Url::to([$action,'id'=>$key]);
        },

            //动作栏按钮设定（默认为：查看，禁用，删除）
        'template' => \shmilyzxt\kartikcrud\ShmilyzxtHelper::filterActionColumn(['view','activate','inactivate', 'delete']),
        'buttons' => [
            'activate' => function($url, $model) {
                //if ($model->status == 1) {
                //    return '';
                //}
                $options = [
                    'role'=>'modal-remote',
                    'title'=>'启用',
                    'data-confirm'=>false,
                    'data-method'=>false,// for overide yii data api
                    'data-request-method'=>'post',
                    'data-toggle'=>'tooltip',
                    'data-confirm-title'=>'确认操作',
                    'data-confirm-message'=>'你确定要启用吗？'
                ];
                return Html::a('<span class="glyphicon glyphicon-ok"></span>', $url, $options);
            },
            'inactivate' => function($url, $model) {
                //if ($model->status == 0) {
                    //return '';
                //}
                $options = [
                    'role'=>'modal-remote',
                    'title'=>'禁用',
                    'data-confirm'=>false,
                    'data-method'=>false,// for overide yii data api
                    'data-request-method'=>'post',
                    'data-toggle'=>'tooltip',
                    'data-confirm-title'=>'确认操作',
                    'data-confirm-message'=>'你确定要禁用吗？'
                ];
                return Html::a('<span class="glyphicon glyphicon-cog"></span>', $url, $options);
            },
        ],
            'viewOptions'=>['role'=>'modal-remote','title'=>'查看及修改','data-toggle'=>'tooltip'],
        //'updateOptions'=>['role'=>'modal-remote','title'=>'更新', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'删除',
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'确认操作',
                          'data-confirm-message'=>'你确定要删除该记录吗？'],
    ],

];   