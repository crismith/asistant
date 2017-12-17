<?php 
require '../../header.php';
require '../../sidebar.php';
?>


<section id="content">

    <div class="page page-dashboard">
        <div class="page page-forms-validate">
            <div class="row">
                <div class="col-md-12">
                    <section class="tile">
                        <div class="tile-header dvd dvd-btm nav-tabs tabs-dark">
                            <h1 class="custom-font"><strong>Registrar </strong>Curso</h1>
                        </div>
                        <div class="tile-body">
                            <form name="form2" role="form" id="form2" data-parsley-validate>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Nombre * </label>
                                        <input type="text" name="nameCurso" id="nameCurso" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Especialidad</label>
                                        <select class="form-control mb-12" name="especialidadCurso" id="especialidadCurso">
                                         <option>Computacion e Informatica</option>
                                         <option>Contabilidad</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="row">
                                 
                                <div class="form-group col-md-6">
                                    <label>Ciclo</label>
                                    <select class="form-control mb-12" name="cicloCurso" id="cicloCurso">
                                     <option>I Ciclo</option>
                                     <option>II ciclo</option>
                                     <option>III ciclo</option>
                                     <option>IV ciclo</option>
                                     <option>V ciclo</option>
                                     <option>VI ciclo</option>
                                 </select>
                             </div>
                             <div class="form-group col-sm-6">
                                <label for="avatar">Imagen del curso</label>
                                <input type="file" id="avatarCurso" class="filestyle" data-buttonText="Foto" data-iconName="fa fa-picture-o">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="avatar">Inicio</label>

                                <div class='input-group datepicker w-460'>
                                    <input type='text'  name="inicioCurso" class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="avatar">Final</label>

                                <div class='input-group datepicker w-460'>
                                    <input type='text' name="finalCurso" class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="avatar">Descripción</label>
                                <textarea name="descriptionCurso" id="" class="form-control" rows="3">
                                    
                                </textarea>
                            </div>

                            <div class="form-group col-sm-6">
                                <br>
                                <br>
                                <br>
                                <p href="" class="text-right">
                                    <button class="btn btn-greensea btn-ef btn-ef-7 btn-ef-7h mb-10"><i class="fa fa-envelope"></i> Guardar</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                
            </section>
        </div>
    </div>
</div>    
</div>
</section>
<!--/ CONTENT -->

<?php 
require '../../footer.php';
?>