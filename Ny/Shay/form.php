
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="booking" class="section">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="booking-form">
                            <form class="form" method = "POST" action = "form.php">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter name of the homestay or district" id="name_search" required>
                                        <span class="form-label">Name of homestay</span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-btn">

                                        <input type = "button" value = "Check Availability" id="submit-btn">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id = "results"></div>

        <script>
            $('#submit-btn').click(function() {
                var search_capture = $('#name_search').val()

                var search_data = {
                    search: search_capture,
                }

                console.log(search_capture)

                $.ajax({
                    url: 'search.php',
                    type: 'POST',
                    data: search_data,
                    success: function(json){
                        console.log("Data:", json)
                        var homestayIds = []

                        var object = JSON.parse(json)

                        for(var i=0; i<object.id.length; i++){
                            var homestay_id = object.id[i];

                            homestayIds.push(homestay_id)
                        }

                        console.log(homestayIds)

                    },
                    error: function (data) {
                        console.log("Failure!", data)
                    }
                })
            })

        </script>
    </body>

</html>

