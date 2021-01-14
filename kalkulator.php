<?php
require_once('header.php')
?>
  <body>
    <div class="container">
        <div class="col-md-12">
        <br /><br />
        <h1 align="center">Kalkulator</h1>
        <form action="task2.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Input</label>
                <input type="text" name="input" class="form-control"  placeholder="Input 1" required="required">
            </div>
            <!-- <div class="form-group">
                <label for="exampleFormControlInput1">Input 1</label>
                <input type="number" name="input1" class="form-control"  placeholder="Input 1" required="required">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Input 2</label>
                <input type="number" name="input2" class="form-control"  placeholder="Input 2" required="required">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select name="operator" class="form-control">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="x">x</option>
                <option value="/">/</option>
                </select>
            </div> -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Calculate!</button>
            </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>