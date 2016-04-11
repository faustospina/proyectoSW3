
<div class="page-header">
<h2><?php echo __('Acusado', array('role' => 'form')); ?></h2>
</div>

<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Ocupacion'); ?></th>
		<th><?php echo __('Culpabilidad'); ?></th>
		<th><?php echo __('CapacidadPago'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Sentencia'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('User'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th><?php echo __('Audiencia'); ?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>
			<?php echo h($acusado['Acusado']['id']); ?>
			&nbsp;
		</td>
		
		<td>
			<?php echo h($acusado['Acusado']['created']); ?>
			&nbsp;
		</td>
		
		<td>
			<?php echo h($acusado['Acusado']['nombre']); ?>
			&nbsp;
		</td>
		
		<td>
			<?php echo h($acusado['Acusado']['apellidos']); ?>
			&nbsp;
		</td>
		
		<td>
			<?php echo h($acusado['Acusado']['direccion']); ?>
			&nbsp;
		</td>
		
		<td>
			<?php echo h($acusado['Acusado']['ocupacion']); ?>
			&nbsp;
		</td>
		
		<td>
			<?php echo h($acusado['Acusado']['culpabilidad']); ?>
			&nbsp;
		</td>
		
		<td>
			<?php echo h($acusado['Acusado']['capacidadPago']); ?>
			&nbsp;
		</td>
		
		<td>
			<?php echo h($acusado['Acusado']['modified']); ?>
			&nbsp;
		</td>
		
		<td>
			<?php echo h($acusado['Acusado']['sentencia']); ?>
			&nbsp;
		</td>

		<td><?php echo h($acusado['Acusado']['foto']); ?>
			&nbsp;</td>
		
		
		<td>
			<?php echo $this->Html->link($acusado['User']['nombre'], array('controller' => 'users', 'action' => 'view', $acusado['User']['id'])); ?>
			&nbsp;
		</td>
		
		<td>
			<?php echo $this->Html->link($acusado['Ciudad']['nombre'], array('controller' => 'ciudads', 'action' => 'view', $acusado['Ciudad']['id'])); ?>
			&nbsp;
		</td>
		
		<td>
			<?php echo $this->Html->link($acusado['Audiencia']['nombre'], array('controller' => 'audiencias', 'action' => 'view', $acusado['Audiencia']['id'])); ?>
			&nbsp;
		</td>

	</tr>
</tbody>
	</table>
</div>


<div class="related">
	<h3><?php echo __('Procesos relacionados'); ?></h3>
	<?php if (!empty($acusado['Proceso'])): ?>
	<div class="col-md-12">
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('NombreDelito'); ?></th>
		<th><?php echo __('NombreVariacionDelito'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('NumeroRadicado'); ?></th>
		<th><?php echo __('NumeroProceso'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Acusado Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($acusado['Proceso'] as $proceso): ?>
		<tr>
			<td><?php echo $proceso['id']; ?></td>
			<td><?php echo $proceso['nombreDelito']; ?></td>
			<td><?php echo $proceso['nombreVariacionDelito']; ?></td>
			<td><?php echo $proceso['descripcion']; ?></td>
			<td><?php echo $proceso['numeroRadicado']; ?></td>
			<td><?php echo $proceso['numeroProceso']; ?></td>
			<td><?php echo $proceso['estado']; ?></td>
			<td><?php echo $proceso['acusado_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'procesos', 'action' => 'view', $proceso['id']),array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'procesos', 'action' => 'edit', $proceso['id']),array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'procesos', 'action' => 'delete', $proceso['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $proceso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	</div>


<div class="col-md-2">

<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('nuevo proceso'), array('controller' => 'procesos', 'action' => 'add'),array('class' => 'btn btn-info')); ?> </li>
		</ul>
	</div>
</div>


<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Acciones'); ?><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><?php echo $this->Html->link(__('Edit Acusado'), array('action' => 'edit', $acusado['Acusado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Acusado'), array('action' => 'delete', $acusado['Acusado']['id']), array(), __('Are you sure you want to delete # %s?', $acusado['Acusado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acusados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acusado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Audiencias'), array('controller' => 'audiencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Audiencia'), array('controller' => 'audiencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>