<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if ($tmpl == 'index') {
    $view->extend('MauticInstallBundle:Install:content.html.php');
}

$header = $view['translator']->trans('mautic.install.install.heading.check.environment');
$view['slots']->set("headerTitle", $header);
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">
			<?php echo $header; ?>
		</h3>
	</div>
	<div class="panel-body">
        <?php if (count($majors)) : ?>
        <h4><?php echo $view['translator']->trans('mautic.install.install.heading.major.problems'); ?></h4>
        <p><?php echo $view['translator']->trans('mautic.install.install.sentence.major.problems', array('%majors%' => count($majors))); ?></p>
        <ol>
            <?php foreach ($majors as $message) : ?>
                <li><?php echo $view['translator']->trans($message); ?></li>
            <?php endforeach; ?>
        </ol>
        <?php endif; ?>
        <?php if (count($minors)) : ?>
        <h4><?php echo $view['translator']->trans('mautic.install.install.heading.minor.problems'); ?></h4>
        <p><?php echo $view['translator']->trans('mautic.install.install.sentence.minor.problems'); ?></p>
        <ol>
            <?php foreach ($minors as $message) : ?>
                <li><?php echo $view['translator']->trans($message); ?></li>
            <?php endforeach; ?>
        </ol>
        <?php endif; ?>
        <?php if (!count($majors) && !count($minors)) : ?>
        <h4><?php echo $view['translator']->trans('mautic.install.install.heading.ready'); ?></h4>
        <p><?php echo $view['translator']->trans('mautic.install.install.sentence.ready'); ?></p>
        <?php endif; ?>
    </div>
</div>
