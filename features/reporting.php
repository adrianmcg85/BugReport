<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include '../bootstrap/style.css'?>
</head>

<body>
    <h1>Bug Reporting</h1>
    <div class="container">
        <form action="submit_bug.php" method="post">
            <h3>Device Type</h3>
            <div class="row">
            <strong>Project name</strong>
            <br>
            <div class="col">
            <input type="text">
            </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <strong>Desktop</strong>
                    <br>
                    <input type="radio" name="device" id="device_desktop">
                </div>
                <div class="col-1">
                    <strong>Tablet</strong>
                    <br>
                    <input type="radio" name="device" id="device_tablet">
                </div>
                <div class="col-1">
                    <strong>mobile</strong>
                    <br>
                    <input type="radio" name="device" id="device_mobile">
                </div>
            </div>
            <div class="row">
                <h3>Browser</h3>
                <br>
                <div class="col">
                    <select name="browser" id="browser">
                        <option value="Chrome">Chrome</option>
                        <option value="IE11">IE11</option>
                        <option value="Firefox">Firefox</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <h3>Description</h3>
                <br>
                <textarea name="description" id="description" cols="30" rows="5"></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
    <?php include '../bootstrap/script.js'?>
</body>

</html>