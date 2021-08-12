<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <title>Form Submission</title>
</head>

<body>
    <div>
        <form id="griggsform" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label font-helvetica-bold">Full Name</label>
                <input type="text" class="d-block w-100 field font-helvetica-regular radius-20" id="name" name="name" placeholder="Full Name" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label font-helvetica-bold">Email</label>
                <input type="email" class="d-block w-100 field font-helvetica-regular radius-20" id="email" name="email" placeholder="name@example.com" />
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label font-helvetica-bold">Telephone</label>
                <input type="number" class="d-block w-100 field font-helvetica-regular radius-20" id="telephone" name="telephone" />
            </div>
            <div class="">
                <label for="message" class="form-label font-helvetica-bold">Message</label>
                <textarea type="text" class="d-block w-100 field font-helvetica-regular radius-10" id="message" name="message" placeholder="Type your message" rows="3"></textarea>
            </div>

            <div class="">
                <button type="submit" name="submit" class="primary-color text-decoration-none  px-4 py-2 rounded-pill border-0 font-helvetica-bold">
                    Submit
                </button>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

            <script>
                $(document).ready(function() {

                    // File upload via Ajax

                    $("#griggsform").on("submit", function(e) {

                        e.preventDefault();

                        $.ajax({

                            type: "POST",

                            url: "db.php",

                            data: new FormData(this),

                            contentType: false,

                            cache: false,

                            processData: false,

                            success: function(result) {
                                alert(result);
                            }

                        });

                    });

                });
            </script>
        </form>
    </div>
</body>

</html>