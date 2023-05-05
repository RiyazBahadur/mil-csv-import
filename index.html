<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload 1 million Records | In Seconds</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #overlay {
            background: #ffffff;
            color: #666666;
            position: fixed;
            height: 100%;
            width: 100%;
            z-index: 5000;
            top: 0;
            left: 0;
            float: left;
            text-align: center;
            padding-top: 21%;
            opacity: .80;
        }

        button {
            margin: 40px;
            padding: 5px 20px;
            cursor: pointer;
        }

        .spinner {
            margin: 0 auto;
            height: 64px;
            width: 64px;
            animation: rotate 0.8s infinite linear;
            border: 5px solid firebrick;
            border-right-color: transparent;
            border-radius: 50%;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row m-3">
            <div class="col">
                <h1 class="font-monospace">Upload Million Data from CSV in seconds</h1>
            </div>
        </div>
        <div class="row m-3 p-3 border">
            <div class="col-9">
                <div class="mb-3">
                    <label for="formFile" class="form-label">CSV upload filed below</label>
                    <input class="form-control" name="csv_filename" type="file" id="csv_filename">
                </div>
            </div>

        </div>

        <div class="row m-3 p-3">
            <div class="col-9">
                <table class="table table-bordered" style="display:none">
                    <thead>
                        <tr>
                            <th scope="col">Table</th>
                            <th scope="col">Records</th>
                            <th scope="col">Seconds</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">Temp</td>
                            <td><span id="records"></span></td>
                            <td><span id="time"></span></td>
                        </tr>
                        <tr>
                            <td scope="col">Final</td>
                            <td><span id="final_records"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="display:none">
                    <div class="card-body">
                        <div class="progress" id="unique_progress">
                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div id="overlay" style="display:none;">
        <div class="spinner"></div>
        <br />
        Loading...
    </div>
    <script>
        $(document).ready(function() {
            $("#csv_filename").change(function(e) {
                $('#overlay').fadeIn();

                var ext = $("input#csv_filename").val().split(".").pop().toLowerCase();

                function randomNumberFromRange(min, max) {
                    return Math.floor(Math.random() * (max - min + 1) + min);
                }


                if ($.inArray(ext, ["csv"]) == -1) {

                    alert('Upload CSV');

                    return false;
                }

                $(".uplogin_file").show();

                if (e.target.files != undefined) {

                    var formData = new FormData()
                    var file_obj = document.getElementById("csv_filename")

                    formData.append('file', file_obj.files[0]);
                    fname = $('#csv_filename').prop('files')[0];
                    formData.append('file', fname);
                    $.ajax({
                        url: "upload.php",
                        method: "POST",
                        data: formData,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            $('#overlay').fadeOut()
                            $('.table').toggle();
                            data = JSON.parse(data);
                            console.log(data.records);
                            console.log(data.time);
                            $('#records').html(data.records);
                            $('#time').html(Math.round(data.time));
                            var uploaded_file_path = data;
                            formData.append('path', uploaded_file_path);
                            $('.card').toggle();
                            $.ajax({
                                xhr: function() {
                                    var xhr = new window.XMLHttpRequest();
                                    xhr.upload.addEventListener("progress", function(evt) {
                                        if (evt.lengthComputable) {
                                            var percentComplete = ((evt.loaded / evt.total) * 100);
                                            $(".progress-bar").width(56 + '%');
                                            $(".progress-bar").html(56 + '%');
                                        }
                                    }, false);
                                    return xhr;
                                },
                                url: "unique.php",
                                method: "POST",
                                data: formData,
                                //   dataType:'json',
                                contentType: false,
                                cache: false,
                                processData: false,
                                success: function(data) {
                                    data = JSON.parse(data);
                                    count = data.count
                                    $('#final_records').html(count)
                                    $(".progress-bar").width(100 + '%');
                                    $(".progress-bar").html(100 + '%');
                                    $(".card").toggle();
                                },
                            })
                        },

                    });
                } else {

                    $(".uplogin_file").hide();

                    $("#filename").empty(" ");

                    alert('No email column found');
                }
            });

        });
    </script>
</body>

</html>