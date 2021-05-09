<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
</head>
<body>


<h1>
    <strong>Laravel Sweet Alert Notification</strong>
</h1>
<input type="text" id="namid">
<button type="button" id="btnresult"> click here to see the result</button>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>

<script>
    $('#btnresult').on('click',function () {
       console.log("btn click");
        var data=$('#namid').val();

        console.log(data);

        if(data=='mina'){
            Swal.fire({
                title: 'Hello its mina',
                type: 'success',
                showCloseButton: true
            })
        }else if(data=='raju'){
            Swal.fire({
                title: 'Hello its raju',
                type: 'warning',
                showCloseButton: true
            })
        }else{
            Swal.fire({
                title: 'none of theme is here',
                type: 'error',
                showCloseButton: true
            })
        }
    })
</script>

</body>
</html>
