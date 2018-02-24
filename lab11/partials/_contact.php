<!-- Modal -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col">
                    <div class="well">
                        <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <fieldset>
                                <legend class="text-center py-4">Contáctanos</legend>

                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col control-label" for="name">Nombre</label>
                                    <div class="col">
                                        <input id="name" name="name" type="text" placeholder="Steve Jobs" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col control-label" for="email">E-mail</label>
                                    <div class="col">
                                        <input id="email" name="e-mail" type="email" placeholder="jobs@apple.com" class="form-control">
                                    </div>
                                </div>

                                <!-- Select input-->
                                <div class="form-group">
                                    <label class="col control-label" for="options">¿Por qué te contactas?</label>
                                    <div class="col">
                                        <select class="form-control" id="options" name="options">
                                            <option value="1">Tengo ideas para el sitio!</option>
                                            <option value="2">Encontré una falla</option>
                                            <option value="3">Puedo contratarlos?</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col control-label" for="message">Comentarios</label>
                                    <div class="col">
                                        <textarea class="form-control" id="message" name="message" placeholder="Por favor escriba aquí su mensaje..." rows="5"></textarea>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col text-right">
                                        <input name="submit" type="submit" class="btn btn-primary btn-lg" value="Enviar">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
