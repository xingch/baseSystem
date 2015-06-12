<?php
use backend\assets\IndexAsset;
use yii\helpers\Html;

IndexAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="easyui-layout" style="overflow-y: hidden" scroll="no">
    <?php $this->beginBody() ?>
    <noscript>
        <div style="position: absolute; z-index: 100000; height: 2046px; top: 0px; left: 0px;
            width: 100%; background: white; text-align: center;">
            <img src="images/noscript.gif" alt='抱歉，请开启脚本支持！' />
        </div>
    </noscript>
    <div region="north" split="true" style="overflow: hidden; height: 30px; background: #D2E0F2 repeat-x center 50%;
        line-height: 20px; color: #fff;">
        欢迎使用
    </div>
    <div region="south" style="height: 20px; background: #D2E0F2;">
        <div style="text-align: center; font-weight: bold">
            <?php echo yii::$app->params['copyright'];?></div>
    </div>
    <div region="west" split="true" title="系统导航" style="width: 180px;overflow:hidden;" icon="icon-redo">
        <div id="menu" class="easyui-accordion" fit="true" border="false">
            <div title="系统管理" style="overflow:auto; padding: 10px;" icon="icon-edit">
                <div title="网站设置">
                    <ul>
                        <li>
                            <div>
                                <a target="mainFrame" href="Product/Default.htm">网站设置</a></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div title="产品管理" style="padding: 10px;" icon="icon-edit">
                <div title="产品管理">
                    <ul>
                        <li>
                            <div>
                                <a target="mainFrame" href="Product/Default.htm">产品管理</a></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div title="关于" icon="icon-help">
                <h4>
                    <?php echo Yii::$app->params['copyright'];?></h4>
            </div>
        </div>
    </div>
    <div region="center" id="mainPanle" style="background: #eee;overflow:hidden;">
        <div id="tabs" class="easyui-tabs" fit="true" border="false">
            <div title="欢迎页面" style="padding: 20px;" id="home">
                <h1>
                    Welcome...</h1>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
