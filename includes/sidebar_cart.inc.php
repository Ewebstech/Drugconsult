  <!-- Sidebar Cart -->
  <div id="wrapper">
      <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
    
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel2">Your Cart</h4>
                    </div>
    
                    <div class="modal-body">
                        <div id="result"></div>
                    </div>
    
                </div><!-- modal-content -->
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    </div>
        <!-- /#sidebar-wrapper -->

<script src="../asset/toastr/toastr.min.js"></script>
    <script src="../node_modules/axios/dist/axios.min.js"></script>
    <script src="../node_modules/qs/dist/qs.js"></script>
    <script src="../asset/myscript.js"></script>

<script>
	
function removeElement(elementId,Id){
  // Removes an element from the document
 
  var element = document.getElementById(elementId);
    element.parentNode.removeChild(element);
    var baseurl = "/app/process.php?deleteRow="+ Id;
    makeRequest(baseurl,Id);
    
}
</script>

