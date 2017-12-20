<?php 
require '../../header.php';
require '../../sidebar.php';
?>

<section id="content">
    <div class="page page-dashboard">
     <div class="page page-tables-footable">
        <div class="row">
            <div class="col-md-12">
                <section class="tile">
                    <div class="tile-header dvd dvd-btm nav-tabs tabs-dark">
                        <h1 class="custom-font"><strong>Especialidad</strong> </h1>
                    </div>
                </section>
            </div>
        </div>

        <section ng-controller="carreras">
            <div class="row" ng-if="carreras">
                <div class="col-sm-4" ng-repeat="carrera in carreras">
                    <div class="thumbnail">
                        <img class="img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4I_PFTRl6mQrJ-zox19Wq3bnUjeR1Jo5Z11KhWSFRcHPK5yuw">
                        <div class="caption">
                            <h3 class="text-center">{{carrera.nameCarrera}} </h3>
                            <p class="text-justify">
                                {{carrera.description}}
                            </p>
                            <p>
                                <a href="carrera-edita.php" class="btn btn-greensea" role="button">
                                    <i class="fa fa-pencil"></i>
                                </a> 
                                <button ng-click="deleteCarrera(carrera._id)" class="btn btn-greensea" role="button">
                                    <i class="fa fa-trash-o"></i>
                                </button>

                                <a href="carrera-info.php" class="btn btn-greensea" role="button">
                                    <i class="fa fa-eye"></i>
                                </a>

                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>
</div>

</section>

<?php 
require '../../footer.php';
?>
