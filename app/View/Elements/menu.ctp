  <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href='#'>Consultorio Juridico</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo $this->Html->link('HOME', array('controller' => 'pages', 'action' => 'display', 'home'))  ?></li>

       <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Agregar involucrados en el proceso <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Agregar juez', array('controller'=>'juezs','action'=>'add'))  ?> </li>
                <li><?php echo $this->Html->link('Agregar fiscal', array('controller'=>'fiscals','action'=>'add'))  ?> </li>
                <li><?php echo $this->Html->link('Agregar ciudades', array('controller'=>'ciudads','action'=>'add'))  ?> </li>
                <li><?php echo $this->Html->link('Agregar carceles', array('controller'=>'carcels','action'=>'add'))  ?> </li>
                <li><?php echo $this->Html->link('Agregar Audiencia', array('controller'=>'audiencias','action'=>'add'))  ?> </li>
                <li><?php echo $this->Html->link('Agregar acusados', array('controller'=>'acusados','action'=>'add'))  ?> </li>
              <li><?php echo $this->Html->link('agregar proceso penal', array('controller'=>'procesos','action'=>'add'))  ?> </li>
              <li><?php echo $this->Html->link('Agregar usuario', array('controller'=>'users','action'=>'add'))  ?> </li>
              </ul>
      </li>
      <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">listas de involucrados en el proceso <span class="caret"></span></a>
              <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Lista de jueces', array('controller'=>'juezs','action'=>'index'))  ?> </li>
            <li><?php echo $this->Html->link('Lista de fiscales', array('controller'=>'fiscals','action'=>'index'))  ?> </li>
            <li><?php echo $this->Html->link('lista de ciudades', array('controller'=>'ciudads','action'=>'index'))  ?> </li>
            <li><?php echo $this->Html->link('lista de carceles', array('controller'=>'carcels','action'=>'index'))  ?> </li>
            <li><?php echo $this->Html->link('lista de Audiencias', array('controller'=>'audiencias','action'=>'index'))  ?> </li>
            <li><?php echo $this->Html->link('lista de acusados', array('controller'=>'acusados','action'=>'index'))  ?> </li>
        <li><?php echo $this->Html->link('lista de procesos penales', array('controller'=>'procesos','action'=>'index'))  ?> </li>
         <li><?php echo $this->Html->link('lista de procesos asociados a un fiscal', array('controller'=>'fiscalsprocesos','action'=>'index'))  ?> </li>
          <li><?php echo $this->Html->link('lista de procesos asociados a un juez', array('controller'=>'juezsprocesos','action'=>'index'))  ?> </li>
             <li><?php echo $this->Html->link('Lista de usuarios', array('controller'=>'users','action'=>'index'))  ?> </li>
              </ul>
       </li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div>
  <h2></h2>

</div>