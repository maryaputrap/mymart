<?php 
    namespace frontend\components;
    use frontend\models\Statistic;
    use yii\base\component;

    class MyComponent extends Component
    {
        const EVENT_STATISTIC = 'statistic';

        public function statisticHandler(){
            $model = new Statistic();
    
            $model->access_time = date("Y-m-d H:i:s");
            $model->user_ip = \Yii::$app->request->userIP;
            $model->user_host = \Yii::$app->request->gethostinfo();
            $model->path_info = \Yii::$app->request->pathInfo;
            $model->query_string = \Yii::$app->request->queryString;
            //return var_dump($model);
            $model->save();
        }
    }
