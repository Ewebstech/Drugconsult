//Toastr Options
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  
$("#FormCart").submit(function(e){
    e.preventDefault();
    // Performing a POST request
    var params = new URLSearchParams();
    params.append('qty', document.getElementById('qty').value);
    params.append('product_id', document.getElementById('product_id').value);
    params.append('product_name', document.getElementById('product_name').value);
    
    submit_form('/app/process.php?addcart', params,'result');

    })

   
    /**
     * Axios Function for sending post requests
     */
    function submit_form(baseurl, params, cid){
        var container = $("#" + cid);
        axios.post(baseurl, 
            params,
            container.html(
                '<h6 class="text-center" ><img src="/images/loading.gif" width="40px" alt="Loading" /> <br/> Please Wait</h6>'
              )
        )    
        .then(function(response){
            container.html(response.data)
            // console.log('saved successfully')
            
        })
        .catch(function(response){ 
            container.html(
                '<h6 class="text-center text-danger"> Error Posting Data</h6>'
              ) 
        });
    } 

    /**
     * Axios Function for sending post requests
     */
    function makeRequest(baseurl, param){
        axios.post(baseurl, 
            param
        )    
        .then(function(response){
           //container.html(response.data)
            console.log('saved successfully' + response.data)
            
        })
        .catch(function(response){ 
            console.log('Error with Request' + response)
        });
    } 

    function axiosCall(baseurl,cid) {
        var container = $("#" + cid);
        axios.get(baseurl)
        .then(function (response) {
        // handle success
        container.html(response.data)
        //console.log(response);
        })
        .catch(function (error) {
        // handle error
        console.log(error);
        })
        .then(function () {
        // always executed
        });
    };

    axiosCall('/app/process.php?showcart','result'); // To output when the page loads
    setInterval(axiosCall, (2 * 1000)); // x * 1000 to get it in seconds