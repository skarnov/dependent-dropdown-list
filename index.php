<!DOCTYPE html>

<html>
    <head>
        <title>Dependent Dropdown List</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Select Car Body</label>
                        <select name="car_body" class="form-control">
                            <option>Select One</option>
                            <option>Sedan</option>
                            <option>Sports Utility Vehicle</option>
                            <option>Multipurpose Vehicle</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Select Brand</label>
                        <select class="form-control">
                            <option id="value"></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $("select[name='car_body']").change(function () {
                var stateID = $(this).val();
                if (stateID) {
                    $.ajax({
                        url: 'ajax.php',
                        data: {'id': stateID},
                        success: function (data) {
                            $('#value').html(data);
                        }
                    });
                } else {
                    $('select[name="car_body"]').empty();
                }
            });
        </script>
    </body>
</html>