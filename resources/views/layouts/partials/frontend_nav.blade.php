<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom: 10px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ScE</a>
        </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#about">Presupuestos</a></li>
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
        <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Inicio</a></li>
            <li>
                {{
                    link_to_route(
                        'company.index',
                        $title = 'Companía',
                        $parameters = array(),
                        $attributes = array()
                    )
                }}
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gastos <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        {{
                            link_to_route(
                                'operating_expense.index',
                                $title = 'Gastos Operativos',
                                $parameters = array(),
                                $attributes = array()
                            )
                        }}
                    </li>
                    <li>
                        {{
                            link_to_route(
                                'operating_expense.index',
                                $title = 'Salarios',
                                $parameters = array(),
                                $attributes = array()
                            )
                        }}
                    </li>
                </ul>
            </li>
            <li><a href="../navbar-static-top/">Presupuestos</a></li>
            <li>
                {{
                    link_to(
                        'auth/logout',
                        $title = 'Salir',
                        $attributes = array(),
                        $secure = null
                    )
                }}
            </li>
        </ul>
    </div><!--/.nav-collapse -->
    </div>
</nav>