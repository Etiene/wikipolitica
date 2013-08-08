<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Bem vindo ao '.CHtml::encode(Yii::app()->name),
)); ?>

<p>Aqui você encontrará informações úteis para escolher em quem votar nas próximas eleições.</p>

<?php $this->endWidget(); ?>

<p>A proposta do site é simples:</p>

<ul>
    <li>Centralizar informações sobre candidatos</li>
    <li>Ter um mecanismo de busca simples e que facilite a obtenção de informação</li>
    <li>Criar um ambiente colaborativo com troca de conteúdo entre os participantes</li>
</ul>

<p>Para mais detalhes sobre o desenvolvimento futuro desta aplicação, entre em contato comigo 
através do endereço da nossa <a href="<?php echo Yii::app()->createUrl('site/contact') ?>">página de contato</a>.</p>
