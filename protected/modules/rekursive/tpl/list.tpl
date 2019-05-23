<div class='rekursive'>
{*   <p class="flow-text">Выберите папку для обработки</p>
  <form action='' method="post" enctype="multipart/form-data" id='folder'>   
    <div class="file-field input-field">
      <div class="btn light-blue darken-4 waves-effect waves-light">
        <span>Выберите папку</span>
        <input type="file" name="files[]" id="files" multiple="" directory="" webkitdirectory="" mozdirectory="">
      </div>
    </div> 
    <a class="waves-effect waves-light btn orange darken-4"><i class="material-icons right">cloud_upload</i><input class="button" type="submit" value="Обработать" /></a>
  </form> *}
  <form action="ajax/folder-structure" class="dropzone" id="uploadFile" name="uploadFile" method="POST">
    <span id="tmp-path"></span>
    <input class="button" type="submit" value="Обработать" />
  </form>
</div>

<script>
  $(document).ready(function () {
    Dropzone.autoDiscover = false;
            
    Dropzone.options.uploadFile = {
      init: function() {
        this.on("success", function(file, responseText) {
          file.previewTemplate.appendChild(document.createTextNode(responseText));
        });             
        this.on("sending", function(file) {
          $("#tmp-path").html('<input type="hidden" name="path" value="'+file.fullPath+'" />')
            });            
          }
        };          
      var myDropzone = new Dropzone("#uploadFile", { 
        url: "ajax/folder-structure"
      });                      
  });

</script>

{* <style>
  input:active, input:focus {
    border: 0 !important;
    outline: none !important;
  }
  input {
    color: white;
  }
  form {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 350px;
  }
  form .file-field .btn {
    height: 35px;
    line-height: 35px;
  }
  .rekursive {
    font-family: 'HelveticaNeueCyr';
    font-size: 24px;
    display: flex;
    height: 100vh;
    width: 100%;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }
</style> *}