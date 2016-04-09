

<div class="page-header">
	<h2><?php echo __('Acusados'); ?></h2>
</div>


<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('ocupacion'); ?></th>
			<th><?php echo $this->Paginator->sort('culpabilidad'); ?></th>
			<th><?php echo $this->Paginator->sort('capacidadPago'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('sentencia'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('audiencia_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($acusados as $acusado): ?>
	<tr>
		<td><?php echo h($acusado['Acusado']['id']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['created']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['ocupacion']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['culpabilidad']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['capacidadPago']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['modified']); ?>&nbsp;</td>
		<td><?php echo h($acusado['Acusado']['sentencia']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($acusado['User']['nombre'], array('controller' => 'users', 'action' => 'view', $acusado['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($acusado['Ciudad']['nombre'], array('controller' => 'ciudads', 'action' => 'view', $acusado['Ciudad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($acusado['Audiencia']['nombre'], array('controller' => 'audiencias', 'action' => 'view', $acusado['Audiencia']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $acusado['Acusado']['id']),array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $acusado['Acusado']['id']),array('class' => 'btn btn-xs btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $acusado['Acusado']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $acusado['Acusado']['id'])); ?>
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

