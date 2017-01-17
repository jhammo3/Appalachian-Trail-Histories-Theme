<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary')); ?>

<div id="row">
  <div class="large-12 columns">
<h1><?php echo metadata('exhibit', 'title'); ?></h1>

<div class="large-9 columns">
<?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
<div class="exhibit-description">
    <?php echo $exhibitDescription; ?>
</div>
<?php endif; ?>

<?php if (($exhibitCredits = metadata('exhibit', 'credits'))): ?>
<div class="exhibit-credits">
    <h3><?php echo __('Credits'); ?></h3>
    <p><?php echo $exhibitCredits; ?></p>
</div>
<?php endif; ?>
</div>
<div class="large-3 columns">
<?php set_exhibit_pages_for_loop_by_exhibit(); ?>
<?php if (has_loop_records('exhibit_page')): ?>
<nav id="exhibit-pages">
    <ul>
        <?php foreach (loop('exhibit_page') as $exhibitPage): ?>
        <?php echo exhibit_builder_page_summary($exhibitPage); ?>
        <?php endforeach; ?>
    </ul>
</nav>
<?php endif; ?>
</div>
</div>
</div>
<?php echo foot(); ?>
