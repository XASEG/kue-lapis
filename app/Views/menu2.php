<div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
              <?php
              if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3)
               { ?>
                <a href="<?=base_url('home/dashboard')?>" class="nav-item nav-link active">Home</a>
                <?php
            }else{
            } ?>            
            <?php
            if (session()->get('level')==1 || session()->get('level')==2)
               { ?>
                <a href="<?=base_url('home/form')?>" class="nav-item nav-link"> ListForm</a>
                <?php
            }else{
            } ?>        <?php
            if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3)
               { ?>
                <a href="<?=base_url('home/tambah_form')?>" class="nav-item nav-link">Form</a>
                <?php
            }else{
            } ?>    
            <?php
            if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3)
                { ?>

                    <a href="<?=base_url('home/kue')?>" class="nav-item nav-link">Menu</a>
                    <?php

                }else{
                } ?>       
                <?php
                if (session()->get('level')==1 || session()->get('level')==2)
                   { ?>
                    <a href="<?=base_url('home/user')?>" class="nav-item nav-link">User</a>
                    <?php

                }else{
                } ?>       
                <?php
                if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3)
                    { ?>
                        <a href="<?=base_url('home/logout')?>" class="nav-item nav-link">Logout</a>
                        <?php

                    }else{
                    } ?>       
                    <?php
                    if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3)
                        { ?>
                            <a href="<?=base_url('home/Signup')?>" class="nav-item nav-link">Signup</a>
                            <?php

                        }else{
                        } ?>
                    </div>
                </div>