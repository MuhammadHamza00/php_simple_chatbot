<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title></title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary-color: #D96AA7;
        --secondary-color: #422C73;
        --complimentary-color: #88BFB5;
        --contrast-color: #F2E527;
        --light-color: #D2A9D9;
    }

    .container {
        background: #191919;
        min-height: 100vh;
        font-family: Montserrat, sans-serif;
    }

    nav {
        width: 10%;
        position: fixed;
        left: 0;
        z-index: 50;
        display: flex;
        justify-content: space-evenly;
        flex-direction: column;
        height: 100vh;
        background: #1c4cef;
    }

    nav a {

        font-size: 20px;
        color: #fff;
        text-decoration: none;
        padding: 5px;
        text-align: center;
    }

    nav a i:hover {
        width: 100%;
        font-size: 20px;
        color: #fff;

        padding: 5px;

        text-align: center;
    }

    nav a :hover {
        font-size: 20px;
        color: #fff;
        padding: 5px;

        text-align: center;
    }

    section {
        position: absolute;
        top: 0;
        height: 100vh;
        width: 0;
        opacity: 0;
        transition: all ease-in .5s;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    section h1 {
        color: #fff;
        font-size: 50px;
        text-transform: uppercase;
        opacity: 0;
    }

    /* Styles applied on trigger */
    section:target {
        opacity: 1;
        position: absolute;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
    }

    section:target h1 {
        opacity: 0;
        animation: 2s fadeIn forwards .5s;
    }

    #first {
        background: var(--primary-color);
    }

    #second {
        background: var(--complimentary-color);
    }

    #third {
        background: var(--contrast-color);
    }

    #fourth {
        background: var(--light-color);
    }

    @keyframes fadeIn {
        100% {
            opacity: 1
        }
    }
</style>

<body>
    <nav>
        <a href="#first"><i class="far fa-user"></i></a>
        <a href="#second"><i class="fas fa-briefcase"></i></a>
        <a href="#third"><i class="far fa-file"></i></a>
        <a href="#fourth"><i class="far fa-address-card"></i></a>
    </nav>

    <div class='container'>
        <section id='first'>
            <h1>First</h1>
        </section>

        <section id='second'>

            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button> -->
         
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form">
                <form id="data-form">
                    <div class="mb-3">
                        <label for="text" class="form-label">Human Response</label>
                        <input type="text" class="form-control" id="human-txt" aria-describedby="">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Bot Response</label>
                        <input type="text" class="form-control" id="bot-txt" aria-describedby="">
                    </div>
                    <button type="submit" class="btn btn-primary" id="enter">Submit</button>
                </form>
            </div>
            <hr>
            <table id="tab" style="display:flex;justify-content:center;align-items:center;">
                <h3>Tables</h3>
            </table>
            <script type="text/javascript">
                $(document).ready(function() {
                    function loadtable() {
                        $.ajax({
                            url: "adminquery.php",
                            type: "POST",
                            success: function(data) {
                                $("#tab").html(data);
                            }
                        });
                    }
                    loadtable();

                    $("#enter").on("click", function() {
                        var human = $("#human-txt").val();
                        var bot = $("#bot-txt").val();
                        $.ajax({
                            url: "addadmin.php",
                            type: "POST",
                            data: {
                                human: human,
                                bot: bot
                            },
                            success: function(data) {
                                $("#data-form").trigger("reset");
                                loadtable();
                            }
                        });
                    });

                    // Delete Data
                    $(document).on("click", ".del-btn", function() {
                        if (confirm("Do you really want to delete data?")) {
                            var id = $(this).data("id");
                            var element = this;
                            $.ajax({
                                url: "adddel.php",
                                type: "POST",
                                data: {
                                    id: id
                                },
                                success: function(data) {
                                    if (data = 1) {
                                        $(element).closest("tr").fadeOut();
                                    } else {
                                        alert("Not deleted");
                                    }
                                    loadtable();
                                }
                            });
                        }
                    });
                    // Update Data
                    $(document).on("click", ".edit-btn", function() {
                        $(".model").show();
                        var id = $(this).data("id");

                    });
                    $("#close").on("click", function() {
                        $("#model").hide();

                    });


                });
            </script>
        </section>

        <section id='third'>
            <h1>Third</h1>
        </section>

        <section id='fourth'>
            <h1>Fourth</h1>
        </section>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>