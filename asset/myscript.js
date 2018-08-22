$("#FormCart").submit(function(e){
    e.preventDefault();
    // Performing a POST request
    var params = new URLSearchParams();
    params.append('qty', document.getElementById('qty').value);
    params.append('param2', document.getElementById('product_id').value);
    var container = $("#result");
    axios.post('/app/process.php?addcart', 
        params,
        container.html(
            '<h6 class="text-center" ><img src="/images/loading.gif" width="40px" alt="Loading" /> <br/> Please Wait</h6>'
          )
          
    )    
    .then(function(response){
        container.html(response.data)
        console.log('saved successfully')
        console.log(response.data); // ex.: { user: 'Your User'}
        console.log(response.status); // ex.: 200
        
    }); 
    })