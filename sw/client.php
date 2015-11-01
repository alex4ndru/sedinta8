<?php

$display = "Send some numbers :)";

if(isset($_POST['a']))
{
    if($_POST['a'] && $_POST['b'])
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $url = "http://localhost/alexphp2/sedinta8/sw/server.php?a={$a}&b={$b}";

        $c_url = curl_init($url);
        curl_setopt($c_url, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($c_url);

        $r = json_decode($data, true)['r'];
        
        $display = "ax + b = 0<br />";
        $display .= "a = {$a}<br />b = {$b}<br />";
        $display .= "x = $r";
    }
}

?>

<div>
    <form action="client.php" method="POST">
        <div>a: <input type="text" name="a"></div>
        <div>b: <input type="text" name="b"></div>
        <div><input type="submit" value="Send"></div>
    </form>
</div>

<div><?php echo $display ?></div>