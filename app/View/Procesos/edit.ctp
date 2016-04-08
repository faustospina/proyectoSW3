<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Proceso', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Editar Proceso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombreDelito', array('class' => 'form-control', 'label' => 'Nombre del delito'));
		echo $this->Form->input('nombreVariacionDelito', array('class' => 'form-control', 'label' => 'Nombre variacion del delito'));
		echo $this->Form->input('descripcion', array('class' => 'form-control', 'label' => 'Descripcion'));
		echo $this->Form->input('numeroRadicado', array('class' => 'form-control', 'label' => 'numero del radicado asignado al caso'));
		echo $this->Form->input('numeroProceso', array('class' => 'form-control', 'label' => 'numero del proceso'));
		echo $this->Form->input('estado', array('class' => 'form-control', 'label' => 'estado en que el acosado delinquio'));
		echo $this->Form->input('acusado_id');
		echo $this->Form->input('Fiscal');
		echo $this->Form->input('Juez');
	?>
	</fieldset>
	<p></p>
<?php echo $this->Form->end(array('label' => 'Editar audiencia', 'class' =>'btn btn-success')); ?>
</p>
</div>
<div class="actions">
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	<?php echo __('Actions'); ?><span class="caret"></span>
		 </button>
	<ul class="dropdown-menu" role="menu">

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Proceso.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Proceso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Acusados'), array('controller' => 'acusados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acusado'), array('controller' => 'acusados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fiscals'), array('controller' => 'fiscals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fiscal'), array('controller' => 'fiscals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Juezs'), array('controller' => 'juezs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juez'), array('controller' => 'juezs', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
</div>
</div>
