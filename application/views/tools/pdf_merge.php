<div class="container m-top content-row my-5">
    <div class="row">
        <div class="col-md-6">
            <?php
            $attr = array(
                'id' => 'myAwesomeDropzone',
                'class' => 'dropzone dropzone-file-area w-100',
                'style' => 'width: 500px; margin-top: 50px;',
            );
            echo form_open('Upload', $attr);?>
            <h3 class="sbold">Drop files here or click to upload</h3>
            </form>
            <a href="<?=base_url('upload/merge_pdfs');?>" class="btn rounded-pill btn-outline-danger btn-md w-100 mt-3"> MERGE FILES & DOWNLOAD </a>
        </div>
    </div>
</div>
