<?php
$n1 = isset($_POST['text1']) ? $_POST['text1'] : '';
$n2 = isset($_POST['text2']) ? $_POST['text2'] : '';
$op = isset($_POST['operation']) ? $_POST['operation'] : '';
$ans = '';

if (!empty($n1) && !empty($n2) && !empty($op)) {
    if (is_numeric($n1) && is_numeric($n2)) {
        switch ($op) {
            case '+':
                $ans = $n1 + $n2;
                break;
            case '-':
                $ans = $n1 - $n2;
                break;
            case '*':
                $ans = $n1 * $n2;
                break;
            case '/':
                if ($n2 != 0) {
                    $ans = $n1 / $n2;
                } else {
                    $ans = 'Division by zero';
                }
                break;
            default:
                $ans = 'Invalid operator';
        }
    } else {
        $ans = 'Invalid input (not numeric)';
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <form method="post">
  <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">A</span>
  <input class="form-control" type="text" name="text1" value="<?php echo $n1;?>" placeholder="Enter first number" aria-label="Username" aria-describedby="addon-wrapping">
</div>
  <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">B</span>
  <input class="form-control" type="text" name="text2" value="<?php echo $n2;?>" placeholder="Enter first number" aria-label="Username" aria-describedby="addon-wrapping">
</div>
</div>
  <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">B</span>
  <input class="form-control" type="text" name="answer" value="<?php echo $ans;?>" placeholder="Enter first number" aria-label="Username" aria-describedby="addon-wrapping">
</div>
            
            <input  ><br><br>
            <input type="submit" name="operation" value="+">
            <input type="submit" name="operation" value="-">
            <input type="submit" name="operation" value="*">
            <input type="submit" name="operation" value="/">
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>

        

