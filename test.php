
<!DOCTYPE HTML>
<html lan="en">  
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    
</head>
<body>

<button onclick="getData()">Click me</button>
<button onclick="postData()">Click me</button>
</form>

<button >Send an HTTP GET request to a page and get the result back</button>
<p id="EmployeeName">hi</p>
<p id="EmployeeDesignation"></p>
<p id="EmployeeLocation"></p>
<p ><?php echo $_GET["razorpay_payment_id"]; ?></p>

</body>

<script>
    function getData(){
        var baseUrl = "http://localhost:7071/api/Transaction/GetAll"
        $.get(baseUrl,
        function(data, status){
            console.log(data)
        
        });
    }

    function postData(){
        
        var jsondata = {"Amount" :400.0, "Currency" :"INR"}
        debugger;
        // var model=  {
        //     name:document.getElementById('name').value,
        //     phone:document.getElementById('phone').value,
        //     email:document.getElementById('email').value,
        //     subject:document.getElementById('subject').value,
        //     message:document.getElementById('message').value
                
        //       };
        $.ajax({
            url:"http://localhost:7071/api/Transaction/Add",
            type:"POST",
            beforeSend: function(request) {
                request.setRequestHeader("Authorization", "Bearer eyJhbGciOiJodHRwOi8vd3d3LnczLm9yZy8yMDAxLzA0L3htbGRzaWctbW9yZSNobWFjLXNoYTI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbGFkZHJlc3MiOiJhZG1pbkB1bndhc3RlLm9yZyIsInJvbGUiOiJBZG1pbiIsImV4cCI6MTY4MjI0ODY4MiwiaXNzIjoiYXBpLm15YWRtaW4uY29tIiwiYXVkIjoiYXBpLm15YWRtaW4uY29tIn0.wuManK3xORWV6RL6U6VwKAUfj2cfzNFP6W2O5qjLF0w");
            },
            data:JSON.stringify(jsondata),
            contentType:"application/json; charset=utf-8",
            dataType:"json",
            success: function(){
                    debugger;
                    alert("Data: " + model + "\nStatus: " );
                }
              })
              
        

    }

    

    $("button").click(function(){
       
debugger;
$.ajax({  
            type: "GET",  
            url: "http://localhost:7071/api/Customer/GetAll", 
            beforeSend: function(request) {
                request.setRequestHeader("Authorization", "Bearer eyJhbGciOiJodHRwOi8vd3d3LnczLm9yZy8yMDAxLzA0L3htbGRzaWctbW9yZSNobWFjLXNoYTI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbGFkZHJlc3MiOiJhZG1pbkB1bndhc3RlLm9yZyIsInJvbGUiOiJBZG1pbiIsImV4cCI6MTY4MjMxMTU1MiwiaXNzIjoiYXBpLm15YWRtaW4uY29tIiwiYXVkIjoiYXBpLm15YWRtaW4uY29tIn0.lQ7LyHeEiCokPJF36RpI7Vtx8wjZ-n5IOpgpTfkwWcQ");
            }, 
            contentType: "application/json; charset=utf-8",  
            dataType: "json",  
            success: function(response) {  
                if (response != null) {  
                    $('#EmployeeName').val(response.name);  
                    $('#EmployeeDesignation').val(response.designation);  
                    $('#EmployeeLocation').val(response.address);  
                } else {  
                    alert("Something went wrong");  
                }  
            },  
            failure: function(response) {  
                alert(response.responseText);  
            },  
            error: function(response) {  
                alert(response.responseText);  
            }  
        });  
   

});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</html>