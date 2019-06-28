<div class="container m-top content-row my-5">
    <div class="row bg-dark justify-content-around shadow p-5">
        <div class="col-md-6">
            <h3 class="text-danger text-center font-weight-bold">Selects/Drop pdf Files to merge</h3>
            <?php
            $attr = array(
                'id' => 'myAwesomeDropzone',
                'class' => 'dropzone dropzone-file-area w-100 require',
                'style' => 'width: 500px; margin-top: 50px;',
            );
            echo form_open('Upload', $attr);?>
            <h3 class="sbold">Drop files here or click to upload</h3>
            </form>
            <a href="<?=base_url('index.php/upload/merge_pdfs');?>" class="btn rounded-pill btn-outline-danger btn-md w-100 mt-3"><i class="fa fa-download"></i>  MERGE FILES & DOWNLOAD </a>
        </div>
    </div>
</div>
