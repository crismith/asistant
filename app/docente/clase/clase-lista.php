<?php 
    require '../../header.php';
    require '../../sidebar.php';
?>

<section id="content">

    <div class="page page-dashboard">
        <div class="pageheader">
            <h2> <strong>Curso :</strong>  Desarrollo Web</h2>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="index.php"><i class="fa fa-home"></i> Asistant</a>
                    </li>
                </ul>
                <span class="controls pull-right">
                    <a href="../curso/curso.php" class="btn btn-ef btn-ef-1 btn-ef-1-greensea btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip">
                        <i class="fa fa-arrow-left"></i> Atras
                    </a>
                </span>
            </div>
        </div>

        <div role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#modulo1" aria-controls="modulo1" role="tab" data-toggle="tab">
                    Modulo I</a>
                </li>
                <li role="presentation">
                    <a href="#modulo2" aria-controls="modulo2" role="tab" data-toggle="tab">
                    Modulo II</a>
                </li>
                <li role="presentation">
                    <a href="#modulo3" aria-controls="modulo3" role="tab" data-toggle="tab">
                    Modulo III</a>
                </li>
                <li role="presentation">
                    <a href="#modulo4" aria-controls="modulo4" role="tab" data-toggle="tab">Modulo IV</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="modulo1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h5 class="panel-title">
                                        <a role="a" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Introduccion a la Web
                                      </a>
                                  </h5>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p> 
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis facere asperiores repellendus explicabo excepturi dicta commodi in, obcaecati quo, mollitia nostrum unde cum tempore. Distinctio temporibus nam, illo nemo ducimus?
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <p class="text-left">Fecha</p>
                                                    <p class="text-left">12-11-2017</p>
                                                    <a href="clase-enseñar.php" class="btn btn-primary">Ver clase</a>
                                                    <a href="clase-edita.php" class="btn btn-primary"> <i class="fa fa-pencil"></i> Editar</a>
                                                    <a href="clase-edita.php" class="btn btn-primary"> <i class="fa fa-trash"></i> Eliminar</a>
                                                    
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="thumbnail">
                                                        <img src="http://pradeeploganathan.com/wp-content/uploads/2016/09/git.jpg" alt="...">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne2">
                                <h5 class="panel-title">
                                    <a role="a" data-toggle="collapse" data-parent="#accordion" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                      Historia de la web
                                  </a>
                              </h5>
                          </div>
                          <div id="collapseOne2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne2">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p> 
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis facere asperiores repellendus explicabo excepturi dicta commodi in, obcaecati quo, mollitia nostrum unde cum tempore. Distinctio temporibus nam, illo nemo ducimus?
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <p class="text-left">Fecha</p>
                                                <p class="text-left">12-11-2017</p>
                                                <a href="clase-enseñar.php" class="btn btn-primary">Ver clase</a>
                                                <a href="clase-edita.php" class="btn btn-primary"> <i class="fa fa-pencil"></i> Editar</a>
                                                <a href="clase-edita.php" class="btn btn-primary"> <i class="fa fa-trash"></i> Eliminar</a>
                                                
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="thumbnail">
                                                    <img src="http://pradeeploganathan.com/wp-content/uploads/2016/09/git.jpg" alt="...">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne3">
                            <h5 class="panel-title">
                                <a role="a" data-toggle="collapse" data-parent="#accordion" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                  php introducción
                              </a>
                          </h5>
                      </div>
                      <div id="collapseOne3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis facere asperiores repellendus explicabo excepturi dicta commodi in, obcaecati quo, mollitia nostrum unde cum tempore. Distinctio temporibus nam, illo nemo ducimus?
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="text-left">Fecha</p>
                                            <p class="text-left">12-11-2017</p>
                                            <a href="clase-enseñar.php" class="btn btn-primary">Ver clase</a>
                                            <a href="clase-edita.php" class="btn btn-primary"> <i class="fa fa-pencil"></i> Editar</a>
                                            <a href="clase-edita.php" class="btn btn-primary"> <i class="fa fa-trash"></i> Eliminar</a>
                                            
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="thumbnail">
                                                <img src="http://pradeeploganathan.com/wp-content/uploads/2016/09/git.jpg" alt="...">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div role="tabpanel" class="tab-pane" id="modulo2">
    <div class="row">
        <div class="col-md-12">

            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="modulo2clase1">
                        <h5 class="panel-title">
                            <a role="a" data-toggle="collapse" data-parent="#accordion2" href="#m2c1" aria-expanded="true" aria-controls="m2c1">
                              Introduccion a la Web
                          </a>
                      </h5>
                  </div>
                  <div id="m2c1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="modulo2clase1">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis facere asperiores repellendus explicabo excepturi dicta commodi in, obcaecati quo, mollitia nostrum unde cum tempore. Distinctio temporibus nam, illo nemo ducimus?
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="text-left">Fecha</p>
                                        <p class="text-left">12-11-2017</p>
                                        <a href="clase-enseñar.php" class="btn btn-primary">Ver clase</a>
                                        <a href="clase-edita.php" class="btn btn-primary"> <i class="fa fa-pencil"></i> Editar</a>
                                        <a href="clase-edita.php" class="btn btn-primary"> <i class="fa fa-trash"></i> Eliminar</a>
                                        
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="thumbnail">
                                            <img src="https://raw.github.com/voodootikigod/logo.js/master/bogjs/js.png" alt="...">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="modulo2clase2">
                    <h5 class="panel-title">
                        <a role="a" data-toggle="collapse" data-parent="#accordion2" href="#m2c2" aria-expanded="true" aria-controls="m2c2">
                          Historia de la web
                      </a>
                  </h5>
              </div>
              <div id="m2c2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="modulo2clase2">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p> 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis facere asperiores repellendus explicabo excepturi dicta commodi in, obcaecati quo, mollitia nostrum unde cum tempore. Distinctio temporibus nam, illo nemo ducimus?
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-5">
                                    <p class="text-left">Fecha</p>
                                    <p class="text-left">12-11-2017</p>
                                    <a href="clase-enseñar.php" class="btn btn-primary">Ver clase</a>
                                    <a href="clase-edita.php" class="btn btn-primary"> <i class="fa fa-pencil"></i> Editar</a>
                                    <a href="clase-edita.php" class="btn btn-primary"> <i class="fa fa-trash"></i> Eliminar</a>
                                    
                                </div>
                                <div class="col-sm-7">
                                    <div class="thumbnail">
                                        <img src="https://raw.github.com/voodootikigod/logo.js/master/bogjs/js.png" alt="...">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="modulo2clase3">
                <h5 class="panel-title">
                    <a role="a" data-toggle="collapse" data-parent="#accordion2" href="#m2c3" aria-expanded="true" aria-controls="m2c3">
                      php introducción
                  </a>
              </h5>
          </div>
          <div id="m2c3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="modulo2clase3">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <p> 
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis facere asperiores repellendus explicabo excepturi dicta commodi in, obcaecati quo, mollitia nostrum unde cum tempore. Distinctio temporibus nam, illo nemo ducimus?
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="text-left">Fecha</p>
                                <p class="text-left">12-11-2017</p>
                                <a href="clase-enseñar.php" class="btn btn-primary">Ver clase</a>
                                <a href="clase-edita.php" class="btn btn-primary"> <i class="fa fa-pencil"></i> Editar</a>
                                <a href="clase-edita.php" class="btn btn-primary"> <i class="fa fa-trash"></i> Eliminar</a>
                                
                            </div>
                            <div class="col-sm-7">
                                <div class="thumbnail">
                                    <img src="https://raw.github.com/voodootikigod/logo.js/master/bogjs/js.png" alt="...">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>




</div>
</div>
</div>

<div role="tabpanel" class="tab-pane" id="modulo3">
    <div class="row">
        <div class="col-md-12">



        </div>
    </div>
</div>

<div role="tabpanel" class="tab-pane" id="modulo4">
    <div class="row">
        <div class="col-md-12">



        </div>
    </div>
</div>
</div>
</section>


<?php 
    require '../../footer.php';
?>