<?php
defined('_JEXEC') or die;

/**
 * Template for Joomla! CMS, created with Artisteer.
 * See readme.txt for more details on how to use the template.
 */



require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference:
$document = & $this;

// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;

// Initialize $view:
$view = $this->artx = new ArtxPage($this);

// Decorate component with Artisteer style:
$view->componentWrapper();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $document->language; ?>" lang="<?php echo $document->language; ?>" dir="ltr">
<head>
 <jdoc:include type="head" />
 <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" type="text/css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" />
 <!--[if IE 6]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie6.css" type="text/css" media="screen" /><![endif]-->
 <!--[if IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" type="text/css" media="screen" /><![endif]-->
 <script type="text/javascript">if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/jquery.js"></script>
 <script type="text/javascript">jQuery.noConflict();</script>
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/script.js"></script>
 <script type="text/javascript">if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
</head>
<body>
<div id="style-page-background-glare-wrapper">
    <div id="style-page-background-glare"></div>
</div>
<div id="style-main">
    <div class="cleared reset-box"></div>
<div class="style-header">
<div class="style-header-position">
    <div class="style-header-wrapper">
        <div class="cleared reset-box"></div>
        <div class="style-header-inner">
<div class="style-headerobject"></div>
<div class="style-logo">
 <h1 class="style-logo-name"><a href="<?php echo $document->baseurl; ?>/"><?php echo $this->params->get('siteTitle'); ?></a></h1>
</div>

        </div>
    </div>
</div>


</div>
<div class="cleared reset-box"></div>
<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<div class="style-bar style-nav">
<div class="style-nav-outer">
<div class="style-nav-wrapper">
<div class="style-nav-inner">
	<?php if ($view->containsModules('position-28')) : ?>
	<div class="style-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
	<?php endif; ?>
	<?php if ($view->containsModules('position-29')) : ?>
	<div class="style-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
	<?php endif; ?>
	<?php echo $view->position('position-1'); ?>
</div>
</div>
</div>
</div>
<div class="cleared reset-box"></div>
<?php endif; ?>
<div class="style-box style-sheet">
    <div class="style-box-body style-sheet-body">
<?php echo $view->position('position-15', 'style-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'style-block'); ?>
<div class="style-layout-wrapper">
    <div class="style-content-layout">
        <div class="style-content-layout-row">
<?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="style-layout-cell style-sidebar1">
<?php echo $view->position('position-7', 'style-block'); ?>
<?php echo $view->position('position-4', 'style-block'); ?>
<?php echo $view->position('position-5', 'style-block'); ?>

  <div class="cleared"></div>
</div>
<?php endif; ?>
<div class="style-layout-cell style-content">

<?php
  echo $view->position('position-19', 'style-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'style-article');
  echo $view->position('position-12', 'style-nostyle');
  if ($view->hasMessages())
    echo artxPost('<jdoc:include type="message" />');
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'style-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'style-article');
  echo $view->position('position-25', 'style-nostyle');
?>

  <div class="cleared"></div>
</div>
<?php if ($view->containsModules('position-6', 'position-8', 'position-3')) : ?>
<div class="style-layout-cell style-sidebar2">
<?php echo $view->position('position-6', 'style-block'); ?>
<?php echo $view->position('position-8', 'style-block'); ?>
<?php echo $view->position('position-3', 'style-block'); ?>

  <div class="cleared"></div>
</div>
<?php endif; ?>

        </div>
    </div>
</div>
<div class="cleared"></div>


<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'style-block'); ?>
<?php echo $view->position('position-26', 'style-nostyle'); ?>
<div class="style-footer">
    <div class="style-footer-body">
        <?php echo $view->position('position-14'); ?>
                <div class="style-footer-text">
                    <?php if ($view->containsModules('position-27')): ?>
                    <?php echo $view->position('position-27', 'style-nostyle'); ?>
                    <?php else: ?>
                    <?php ob_start(); ?>
<p>Cenadi Bronx ©. All Rights Reserved.</p> 

                    <?php echo str_replace('%YEAR%', date('Y'), ob_get_clean()); ?>
                    <?php endif; ?>
                </div>
        <div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="cleared"></div>
<p class="style-page-footer"></p>

    <div class="cleared"></div>
</div>

<?php echo $view->position('debug'); ?>
</body>
</html>
