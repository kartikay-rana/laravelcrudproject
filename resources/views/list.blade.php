<!-- fetch data from database -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Database_table</title>
</head>
<style>
    .center {
        text-align: center;
        align-items: center;
    }

    .rightalign {
        display: flex;
        text-align: end;
    }

    * {
        box-sizing: border-box;
    }

    .new_cetre {
        top: 0;
        left: 0;
        min-height: 100%;
        min-width: 100vw;
        position: absolute;
        display: flex;
        justify-content: center;
        /* text-align: center; */
        align-items: center;
        background-color: rgb(0, 0, 0, 0.3);

    }

    #body {
        border-radius: 12px;
        border: 2px solid black;
        min-width: 50vw;
        background-color: white;
        display: flex;
        justify-content: center;
    }
</style>

<body>
    <div class="container">
        <div class="row center">
            <div class="col-lg-12">
                <h1>STUDENT_LIST</h1>
                <!-- creating dynamic table for fetch data from the database  -->
                <table border="2" class="table table-dark ">
                    <thread>
                        <tr>
                            <th>ID</th>
                            <th>First_name</th>
                            <th>Last_name</th>
                            <th>Age</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    </thread>
                    <!-- adding for each loop to table  -->
                    @foreach($Student as $student)
                    <tr>
                        <td>{{$student['id']}}</td>
                        <td>{{$student['First_name']}}</td>
                        <td>{{$student['Last_name']}}</td>
                        <td>{{$student['Age']}}</td>
                        <td>{{$student['Subject']}}</td>
                    </tr>
                    <!-- ending the loop -->
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row rightalign">
            <div class="col-lg-12">
                <div class="container">
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg">Open Modal</button>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="new_cetre">
            <div id="body">
                <div class="modal-container" id="modal_container">
                    <div class="mymodal">
                        <h1>ADD_NEW_STUDENT_DATA</h1>
                    </div>
                    <div class="row" style="display:content;justify-content:center">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="from-group">
                                        <label for="firstname">First_name:</label>
                                        <input type="text" class="form-control" placeholder="Enter_your_firstname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from-group">
                                        <label for="firstname">First_name:</label>
                                        <input type="text" class="form-control" placeholder="Enter_your_firstname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="from-group">
                                        <label for="firstname">First_name:</label>
                                        <input type="text" class="form-control" placeholder="Enter_your_firstname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from-group">
                                        <label for="firstname">First_name:</label>
                                        <input type="text" class="form-control" placeholder="Enter_your_firstname">
                                    </div>
                                </div>
                            </div>
                            <label for="firstname">First_name:</label>
                            <input type="text" class="form-control" placeholder="Enter_your_firstname">
                        </div>
                        <div class="from-group">
                            <label for="firstname">First_name:</label>
                            <input type="text" class="form-control" placeholder="Enter_your_firstname">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="from-group">
                            <label for="firstname">First_name:</label>
                            <input type="text" class="form-control" placeholder="Enter_your_firstname">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="from-group">
                            <label for="firstname">First_name:</label>
                            <input type="text" class="form-control" placeholder="Enter_your_firstname">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-lg-12">
                    <button style="margin-top:10px; margin-bottom:20px;" class="btn btn-warning" id=add>ADD</button>
                    <button style="margin-top:10px; margin-bottom:20px;" class="btn btn-warning" id="close">CANCEL</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
<script>

</script>

</html>