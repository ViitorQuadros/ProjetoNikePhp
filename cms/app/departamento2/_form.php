<div class="row">
	<div class="col-lg-12">
        <form accept-charset="UTF-8" action="" name="form" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
            <fieldset>
            <input type="hidden" name="submit" value="1" />
            <input type="hidden" name="id" value="<?= (!empty($item['id']) ? $item['id'] : ''); ?>" />

            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <div class="col-lg-4 lbl">
                            <label class="control-label" for="departamento">
                                <span class="required">*</span> departamento:
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <input name="departamento" maxlength="100" type="text" class="form-control" value="<?= (!empty($item['departamento']) ? $item['departamento'] : ''); ?>" required="required" autofocus />
                        </div>
                    </div>
				</div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <div class="col-lg-4 lbl">
                            <label class="control-label" for="status">
                                <span class="required">*</span> Situação:
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <select name="status" class="form-control" required="">
                                <option value="">Selecione</option>
                                <option value="0" <?= ($acao == 'edit' && empty($item['status']) ? 'selected' : ''); ?>>Desabilitado</option>
                                <option value="1" <?= ($acao == 'new' || !empty($item['status']) ? 'selected' : ''); ?>>Habilitado</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row well">
                <div class="col-lg-12" style="text-align: center;">
                    <a class="btn btn-default" href="?m=<?= $modulo; ?>" title="Cancelar">
                        <i class="fa fa-times fa-fw"></i> Cancelar
                    </a>
                    <button class="btn btn-primary" type="submit" title="Salvar">
                        <i class="fa fa-check fa-fw"></i> Salvar
                    </button>
                </div>
            </div>
        </form>
	</div>
</div>