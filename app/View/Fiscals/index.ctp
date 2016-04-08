
	<div class="page-header">
	<h2><?php echo __('Fiscales'); ?></h2>
	</div>


	<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('codigoRepresentativo'); ?></th>
			<th><?php echo $this->Paginator->sort('audiencia_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fiscals as $fiscal): ?>
	<tr>
		<td><?php echo h($fiscal['Fiscal']['id']); ?>&nbsp;</td>
		<td><?php echo h($fiscal['Fiscal']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($fiscal['Fiscal']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($fiscal['Fiscal']['codigoRepresentativo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fiscal['Audiencia']['nombre'], array('controller' => 'audiencias', 'action' => 'view', $fiscal['Audiencia']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fiscal['Fiscal']['id']),array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fiscal['Fiscal']['id']),array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fiscal['Fiscal']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $fiscal['Fiscal']['id'])); ?>
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
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn btn-xs btn-success'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-xs btn-success'));
	?>
	</div>
</div>

