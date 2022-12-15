<?php require './header-admin.php'; ?>         
                <div class="col-9" style="padding-top:20px;padding-right:40px">
                    
                    <div class="tab-content" id="v-pills-tabContent" style="padding-top:20px">
                        <div class="table-responsive tab-pane fade show active" id="v-pills-ds" role="tabpanel" aria-labelledby="v-pills-ds-tab">
                            
                            <p>Bienvenu dans votre sesssion</p>
                        </div>
                        
                    </div>
                    <div class="custom-file was-validated">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                    </div>


                    <form class="was-validated">
 

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                            <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                            <div class="invalid-feedback">Example invalid feedback text</div>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>

                        

                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" style="position:none !important" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
    
    <?php require './footer-admin.php'; ?>
    <script>
      $("input[type=file]").change(function (e){$(this).next('.custom-file-label').text(e.target.files[0].name);})
    </script>