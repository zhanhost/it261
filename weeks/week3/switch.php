<?php
    //class coffee exercise
    //if today is Thursday, it will be pumpkin latte day
    //introducing the isset{} function
    //introducing GLOBAL variables
    //switch clauses

    //starting the switch
    //if $GET['today'] is set, $today, then this happens; if it is not, then else happens
    //else, today is TODAY

    //GLOBAL VARIABLES are capitalized and start with $_GET

    //isset function - asking if something has been set

// $variable = 'This is our variable';

// if(isset($variable)) {
//     echo 'Variable has been set' ; 
// }
// else {
//     echo 'Variable has not been set';
// }

// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'Today has been set';
// }
// else {
//     echo 'Today has not been set';
// }

date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])) {
    $today = $_GET['today'];
}
else {
    $today = date('l');
}

switch($today) {
    case 'Friday':
        $coffee = '<h2>Friday is our Pumpkin Latte Day</h2>';
        $pic = './pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = '<p>The <b>Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional autumn spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in the fall of 2003. The popular flavor has inspired a wide range of product variations that appear on a seasonal basis.</p>';
        break;
    case 'Saturday':
        $coffee = '<h2>Saturday is our Green Tea Latte Day</h2>';
        $pic = './green-tea.jpg';
        $alt = 'Green Tea Latte';
        $content = '<p>A <b>green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place.</p>';
        break;
    case 'Sunday':
        $coffee = '<h2>Sunday is our Regular Coffee Day</h2>';
        $pic = './coffee.png';
        $alt = 'Regular Coffee';
        $content = '<p><b>Coffee</b> with cream and sugar (in contrast to the expected meaning of "black coffee" in other regions of the USA). </p>';
        break;
    case 'Monday':
        $coffee = '<h2>Monday is our Latte Day</h2>';
        $pic = './latte.jpg';
        $alt = 'Latte';
        $content = '<p><b>Latte</b> is a creamier version of coffee. Two-thirds of it is steamed milk, poured over a shot of espresso and topped with a layer of milk foam.</p>';
        break;
    case 'Tuesday':
        $coffee = '<h2>Tuesday is our Americano Day</h2>';
        $pic = './americano.jpg';
        $alt = 'Americano';
        $content = '<p><b>Caffè Americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. Its strength varies with the number of shots of espresso and amount of water added. The name is also spelled with varying capitalization and use of diacritics: e.g., café americano.</p>';
        break;
    case 'Wednesday':
        $coffee = '<h2>Wednesday is our Cappuccino Day</h2>';
        $pic = './cap.jpg';
        $alt = 'Cappuccino';
        $content = '<p>A <b>cappuccino</b> is an espresso-based coffee drink that originated in Austria and was later popularized in Italy and is prepared with steamed milk foam (microfoam).</p>';
        break;
    case 'Thursday':
        $coffee = '<h2>Thursday is our Frappuccino Latte Day</h2>';
        $pic = './frap.jpg';
        $alt = 'Frappuccino';
        $content = '<p><b>Frappuccino</b> is a line of blended iced coffee drinks sold by Starbucks. It consists of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or spices. Frappuccinos are also sold as bottled coffee beverages in grocery stores, convenience stores and from vending machines.</p>';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        #wrapper {
            width: 940px;
            margin: 20px auto;
        }

        h1, h2, img {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
        <?php
        echo $coffee;
        ?>
        <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <?php echo $content; ?>

        <h2>Check out our Daily Specials</h2>
        <p><i>Please complete all the days of the week.</i></p>
        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>

    </div> <!-- end wrapper-->
</body>
</html>