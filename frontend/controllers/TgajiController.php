<?php

namespace frontend\controllers;

use app\models\Tgaji;
use app\models\TgajiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TgajiController implements the CRUD actions for Tgaji model.
 */
class TgajiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Tgaji models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TgajiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tgaji model.
     * @param int $id ID
     * @param int $id_pegawai Id Pegawai
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $id_pegawai)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $id_pegawai),
        ]);
    }

    /**
     * Creates a new Tgaji model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tgaji();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id, 'id_pegawai' => $model->id_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tgaji model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @param int $id_pegawai Id Pegawai
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $id_pegawai)
    {
        $model = $this->findModel($id, $id_pegawai);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'id_pegawai' => $model->id_pegawai]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tgaji model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @param int $id_pegawai Id Pegawai
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $id_pegawai)
    {
        $this->findModel($id, $id_pegawai)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tgaji model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @param int $id_pegawai Id Pegawai
     * @return Tgaji the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $id_pegawai)
    {
        if (($model = Tgaji::findOne(['id' => $id, 'id_pegawai' => $id_pegawai])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
