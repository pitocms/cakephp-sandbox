<?php
/**
 * @var \App\View\AppView $this
 * @var string[] $exposedUsers !
 */
?>
<h2>CakePHP Expose Examples</h2>

<a href="https://github.com/dereuromark/cakephp-expose" target="_blank">[Source]</a>

<h3>Table overview</h3>
<p>
<?php echo $this->Html->link('List all exposed users in paginated list', ['action' => 'users']); ?>
</p>

<h3>Check a specific one</h3>

<p>The following are ordered by name:</p>
<ul>
	<?php foreach ($exposedUsers as $exposedId => $exposedUser) { ?>
	<li><?php echo $this->Html->link($exposedUser, ['action' => 'view', $exposedId]); ?></li>
	<?php } ?>
</ul>

<p>It is now not possible anymore to see the primary key, and thus the order of creation or linking of those to a count of records per time-frame.</p>

<h3>Superimposed behavior</h3>

<p>In some cases you don't want to modify all public actions and their templates. In that case you can use the superimpose functionality to map UUIDs to the  primary key field on read, and the other way around on write.</p>

<p>
	<?php echo $this->Html->link('CRUD actions through superimposed exposure', ['action' => 'superimposedIndex']); ?>
</p>
