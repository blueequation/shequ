<?php

namespace frontend\controllers;

use Yii;
use common\models\Person;
use common\models\PersonSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;

/**
 * PersonController implements the CRUD actions for Person model.
 */
class PersonController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'bulk-delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * 首页（显示记录列表）Person.
     * @return mixed
     */
    public function actionIndex()
    {    
        $searchModel = new PersonSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * 查看详情Person.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {   
        $request = Yii::$app->request;
        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                    'title'=> "Person #".$id,
                    'size' => 'large',
                    'content'=>$this->renderAjax('view', [
                        'model' => $this->findModel($id),
                    ]),
                    'footer'=> Html::button('<i class="glyphicon glyphicon-ban-circle"></i> 关闭',['class'=>'btn btn-danger','data-dismiss'=>"modal"])
                   ];
        }else{
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
    }

    /**
     *插入一条记录 Person.
     * For ajax request will return json object
     * and for non-ajax request if creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $request = Yii::$app->request;
        $model = new Person();  

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "创建 Person",
                    'size' => 'large',
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('<i class="glyphicon glyphicon-ban-circle"></i> 关闭',['class'=>'btn btn-danger','data-dismiss'=>"modal"]).
                                Html::button('<i class="glyphicon glyphicon-ok"></i> 保存',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }else if($model->load($request->post()) && $model->save()){
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "新建 Person",
                    'content'=>'<span class="text-success">创建 Person 成功</span>',
                    'footer'=> Html::button('<i class="glyphicon glyphicon-ban-circle"></i> 关闭',['class'=>'btn btn-danger','data-dismiss'=>"modal"]).
                            Html::a('<i class="glyphicon glyphicon-ok"></i> 继续创建',['create'],['class'=>'btn btn-primary','role'=>'modal-remote'])
        
                ];         
            }else{           
                return [
                    'title'=> "创建 Person",
                    'size' => 'large',
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('<i class="glyphicon glyphicon-ban-circle"></i> 关闭',['class'=>'btn btn-danger','data-dismiss'=>"modal"]).
                                Html::button('<i class="glyphicon glyphicon-ok"></i> 保存',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->Id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
       
    }

    /**
     * 修改记录：Person .
     * For ajax request will return json object
     * and for non-ajax request if update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $request = Yii::$app->request;
        $model = $this->findModel($id);       

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "更新 Person #".$id,
                    'size' => 'large',
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('<i class="glyphicon glyphicon-ban-circle"></i> 关闭',['class'=>'btn btn-danger','data-dismiss'=>"modal"]).
                                Html::button('<i class="glyphicon glyphicon-ok"></i> 保存',['class'=>'btn btn-primary','type'=>"submit"])
                ];         
            }else if($model->load($request->post()) && $model->save()){
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "Person #".$id,
                    'size' => 'large',
                    'content'=>$this->renderAjax('view', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('<i class="glyphicon glyphicon-ban-circle"></i> 关闭',['class'=>'btn btn-danger','data-dismiss'=>"modal"])
                ];    
            }else{
                 return [
                    'title'=> "更新 Person #".$id,
                    'size' => 'large',
                    'content'=>$this->renderAjax('view', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('<i class="glyphicon glyphicon-ban-circle"></i> 关闭',['class'=>'btn btn-danger','data-dismiss'=>"modal"])
                ];        
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->Id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * 删除记录Person(从列表删除，删除后刷新列表页面) .
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $request = Yii::$app->request;
        $this->findModel($id)->delete();

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }


    }

    /**
    * 删除记录从消息页面modalPerson.
    * For ajax request will return json object
    * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
    * @param integer $id
    * @return mixed
    */
    public function actionDeletefromdetail($id)
    {
        $request = Yii::$app->request;
        $ret = $this->findModel($id)->delete();

        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;

            if($ret === false){
                return [
                    'success' => false,
                    'messages' => [
                    'kv-detail-danger' => '删除失败',
                    ]
                ];
            }

            return [
                'forceClose'=>true,
                'forceReload'=>'#crud-datatable-pjax',
                'success' => true,
                'messages' => [
                    'kv-detail-success' => '删除成功',
                ]
            ];
        }else{
            return $this->redirect(['index']);
        }
    }

     /**
     * 批量删除记录Person.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionBulkDelete()
    {        
        $request = Yii::$app->request;
        $pks = explode(',', $request->post( 'pks' )); // Array or selected records primary keys
        foreach ( $pks as $pk ) {
            $model = $this->findModel($pk);
            $model->delete();
        }

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }
       
    }

    /**
    * 激活
    * @param integer $id
    * @return type
    */
    /*public function actionActivate($id)
    {
        $model = $this->findModel($id);
        if ($model->status == 0) {
            $model->status = 1;
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        if ($model->save()) {
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }
    }*/

    /**
    * 禁用
    * @param integer $id
    * @return type
    */
    /*public function actionInactivate($id)
    {
        $model = $this->findModel($id);

        if ($model->status == 1) {
            $model->status = 0;
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        if ($model->save()) {
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }
    }*/


    /**
     * Finds the Person model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Person the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Person::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('页面不存在.');
        }
    }
}
