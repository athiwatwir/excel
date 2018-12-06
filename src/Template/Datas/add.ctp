<?= $this->element('Lib/data_table') ?>

<div class="row">
    <div class="col-12">
        <div class="card m-b-20 card-body">


            <div class="form-group row ">
                <div class="col-md-12 ">
                    <h2 class="prompt-400 "><i class="fa fa-cogs"></i> อัพโหลด</h2>
                </div>
                <div class="col-md-12 ">
                      <table id="datatable" class="table table-responsive-lg table-responsive-sm" cellspacing="0"  width="100%">


                        <tr>
                            <td colspan="2">Row 1, cell 1</td>
                            <td>Row 1, cell 2</td>
                        </tr>
                        <tr>
                            <td>Row 2, cell 1</td>
                            <td>Row 2, cell 2</td>
                            <td>Row 2, cell 3</td>
                        </tr>
                        <tr>
                            <td>Row 3, cell 1</td>
                            <td rowspan="2">Row 3, cell 2</td>
                            <td>Row 3, cell 3</td>
                        </tr>
                        <tr>
                            <td>Row 4, cell 1</td>
                            <td>Row 4, cell 3</td>
                        </tr>
                    </table>
                </div>




            </div>

        </div>
    </div>
</div>