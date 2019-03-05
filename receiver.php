<html>
    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>

    <script>

        var socket = io.connect('http://localhost:3002');

        socket.on('new-order',function(data){
            console.log(data);
        })


    </script>
    </body>
</html>
