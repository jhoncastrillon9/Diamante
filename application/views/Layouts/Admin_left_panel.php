    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo site_url('AdminDiamante')?>"><i class="menu-icon fa fa-laptop"></i>Inicio </a>
                    </li>
                    <li class="menu-title">Entidades</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-card-o"></i>Clientes</a>

                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-bars"></i><a href="<?php echo site_url('AdminClientes')?>">Consultar Clientes</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="<?php echo site_url('AdminClientes/index/add')?>">Nuevo Cliente</a></li>   
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fire"></i>Proveedores</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bars"></i><a href="<?php echo site_url('AdminProveedores')?>">Consultar Proveedores</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="<?php echo site_url('AdminProveedores/index/add')?>">Nuevo Proveedor</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-badge"></i>Usuarios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-bars"></i><a href="<?php echo site_url('AdminUsuarios')?>">Consultar Usuarios</a></li>
                            <li><i class="menu-icon fa fa-id-badge"></i><a href="<?php echo site_url('AdminUsuarios/index/add')?>">Nuevo Usuario</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Proyectos</li><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Proyectos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="<?php echo site_url('AdminProyectos

                            ')?>">Consultar Proyectos</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="<?php echo site_url('AdminProyectos/index/add')?>">Nuevo Proyecto</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Presupuestos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="<?php echo site_url('AdminPresupuestos')?>">Consultar Presupuestos</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="<?php echo site_url('AdminPresupuestos/index/add')?>">Nuevo Presupuesto</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="<?php echo site_url('AdminPresupuestos/index/add')?>">Detallar Presupuesto</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="<?php echo site_url('AdminCategoriasp')?>">Categorias</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="<?php echo site_url('AdminItemsp')?>">Items</a></li>
                            <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo site_url('AdminMedidasp')?>">Medidas</a></li>
                        </ul>
                    </li>  
                    <li class="menu-title">Financieros</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Bancos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo site_url('AdminBancos')?>">Consultar Bancos</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo site_url('AdminBanco/index/add')?>">Nuevo Banco</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Cuentas x Cobrar</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo site_url('AdminCxc')?>">Consultar CXC</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo site_url('AdminCxc/index/add')?>">Nuevo CXC</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pie-chart"></i>Cuentas x Pagar</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo site_url('AdminCxp')?>">Consultar CXP</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo site_url('AdminCxp/index/add')?>">Nuevo CXP</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->