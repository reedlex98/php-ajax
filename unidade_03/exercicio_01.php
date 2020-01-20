<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="load"></div>

        <script src="jquery.js"></script>
        <script>
            $.ajax({
                type: "get",
                url: "./nome.php",
                dataType: "text",
                // success: function (response) {
                //     console.log(response)
                // },
                // error: function(err){
                //     console.log(err)
                // }
            })
            .done( data => {console.log(data)})
            .fail( err => {console.log(err)})
            .always(() => {console.log("Sempre mostrada")})
            // $('#load').load('./dados.txt')

        </script>
    </body>
</html>