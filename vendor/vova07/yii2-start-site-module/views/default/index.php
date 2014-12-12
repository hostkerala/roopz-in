<?php

/**
 * Frontend main page view.
 *
 * @var yii\web\View $this View
 */

$this->title = Yii::$app->name;
$this->params['noTitle'] = true; ?>

<section id="main-slider" class="no-margin center">
    <div class="well">
        <p><img src="<?= $this->assetManager->publish('@vova07/themes/site/images/slider/bg2.png')[1] ?>" alt="Yii 2" /></p>
        <p><h2><strong>Ninja <small>Roopz</small></strong><h2></p>
    </div>
</section>

<section id="services" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-film icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">My Projects</h3>
                        <p><strong>3+</strong> CRM Projects</p>
                        <p><strong>50+</strong> Websites</p>
                        <p><strong>30+</strong> APIs</p>
                        <p><strong>Banking</strong> Project</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-heart icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">I am in Love with</h3>
						<p>Yii & Laravel</p>
                        <p>PHP | Javascript | Jquery | BackboneJs | AngularJs  | SOAP | WSDL | XML | API | Bootstrap | GIT | SVN | CSS HTML5</p>
						<p>Ubuntu | MySQL | PostgreSQL | MongoDB</p>  
                    </div>
                </div>
            </div><!--/.col-md-4-->
			<div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-phone icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Who am I ?</h3>
                        <p>Yii Framework/Web Development Ninja</p>
                        <p><b>Skype :</b> roopan.valiya.veetil</p>
                        <p><b>Email :</b> yiioverflow@gmail.com</p>
                        <p><b>Phone :</b> +919496243415</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
        </div>
    </div>
</section>