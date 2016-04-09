<div class="page-header">
	<h2><?php echo __('Juezs Procesos'); ?></h2>
	</div>

	<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('proceso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('juez_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($juezsProcesos as $juezsProceso): ?>
	<tr>
		<td><?php echo h($juezsProceso['JuezsProceso']['id']); ?>&nbsp;</td>
		<td><?php echo h($juezsProceso['JuezsProceso']['proceso_id']); ?>&nbsp;</td>
		<td><?php echo h($juezsProceso['JuezsProceso']['juez_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $juezsProceso['JuezsProceso']['id']),array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $juezsProceso['JuezsProceso']['id']),array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $juezsProceso['JuezsProceso']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $juezsProceso['JuezsProceso']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	

		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	</p>
		<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
	<?php echo $this->Js->writeBuffer(); ?>
	</div>

</div>

