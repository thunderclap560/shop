<div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                   <?php foreach($menu as $val_menu){?>
                                    <li><a href="#"><?php echo $val_menu->name;?></a></li>
                                    <?php } ?>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>