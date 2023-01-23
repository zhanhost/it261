<?php
    include('./includes/header.php');

    date_default_timezone_set('America/Los_Angeles');

    if(isset($_GET['today'])) {
        $today = $_GET['today'];
    }
    else {
        $today = date('l');
    }

    switch($today) {
        case 'Sunday':
            $weekday_header = '<h2 style="color: darkorange;">Sunday</h2>';
            $pic = './architectsNightmares.jpg';
            $alt = 'Architects (Band) 2006 Nightmares Album';
            $content = '<p><b><i>Nightmares</i></b> is the debut studio album by British metalcore band Architects. It was released on 15 May 2006 through Distort and In at the Deep End Records. The album was produced by the band themselves and Karl Bareham. It is the only album featuring the band\'s original line-up with Matt Johnson on vocals and Tim Lucas on bass.</p>
            <p>It is <b>Sunday</b>!</p>';
            break;
        case 'Monday':
            $weekday_header = '<h2 style="color: gray;">Monday</h2>';
            $pic = './architectsHereAndNow.jpg';
            $alt = 'Architects (Band) 2012 The Here And Now Album';
            $content = '<p><b><i>The Here and Now</i></b> is the fourth studio album by British metalcore band Architects. It was released on 19 January 2011 through Century Media Records in the United Kingdom and majority of Europe, and 20 January 2011 in the United States. The album was recorded with producer Steve Evetts at his own studio The Omen Room Studios in California.</p>
            <p>It is <b>Monday</b>!</p>';
            break;
        case 'Tuesday':
            $weekday_header = '<h2 style="color: navy;">Tuesday</h2>';
            $pic = './architectsLostForeverLostTogether.jpg';
            $alt = 'Architects (Band) 2014 Lost Forever // Lost Together Album';
            $content = '<p><b><i>Lost Forever // Lost Together</i></b> is the sixth studio album by British metalcore band Architects. It was released on 11 March 2014 globally through Epitaph Records; with the exception of UNFD in Australia and New Damage in Canada.</p>
            <p>It is <b>Tuesday</b>!</p>';
            break;
        case 'Wednesday':
            $weekday_header = '<h2 style="color: cornflowerblue;">Wednesday</h2>';
            $pic = './architectsAllOurGodsHaveAbandonedUs.jpg';
            $alt = 'Architects (Band) 2016 All Our Gods Have Abandoned Us Album';
            $content = '<p><b><i>All Our Gods Have Abandoned Us</i></b> is the seventh studio album by British metalcore band Architects. It was released on 27 May 2016 globally through Epitaph Records; with the exception of UNFD in Australia and New Damage in Canada. The album peaked at number 109 on the Billboard 200, and reached number 15 on the UK Albums Chart.</p>
            <p>It is <b>Wednesday</b>!</p>';
            break;
        case 'Thursday':
            $weekday_header = '<h2 style="color: lightcyan;">Thursday</h2>';
            $pic = './architectsHolyHell.jpg';
            $alt = 'Architects (Band) 2018 Holy Hell Album';
            $content = '<p><b><i>Holy Hell</i></b> is the eighth studio album by British metalcore band Architects. It was released on 9 November 2018 through UNFD and Epitaph Records. The album was produced by Dan Searle and Josh Middleton. It is the follow-up to the band\'s previous album <b><i>All Our Gods Have Abandoned Us</i></b>, and is the first record without founding member and main songwriter Tom Searle, following his death from skin cancer in August 2016.</p>
            <p>It is <b>Thursday</b>!</p>';
            break;
        case 'Friday':
            $weekday_header = '<h2 style="color: wheat;">Friday</h2>';
            $pic = './architectsForThoseWhoWishToExist.jpg';
            $alt = 'Architects (Band) 2021 For Those Who Wish To Exist Album';
            $content = '<p><b><i>For Those That Wish to Exist</i></b> is the ninth studio album by British metalcore band Architects. It was released on 26 February 2021 through Epitaph Records. The album was produced by Dan Searle and Josh Middleton.</p>
            <p>It is <b>Friday</b>!</p>';
            break;
        case 'Saturday':
                $weekday_header = '<h2 style="color: ghostwhite;">Saturday</h2>';
                $pic = './architectsTheClassicSymptomsOfABrokenSpirit.jpeg';
                $alt = 'Architects (Band) 2022 The Classic Symptoms Of A Broken Spirit Album';
                $content = '<p><b><i>The Classic Symptoms of a Broken Spirit</i></b> (stylised in lowercase) is the tenth studio album by British metalcore band Architects. It was released on 21 October 2022 through Epitaph Records. The album was produced by Dan Searle and Josh Middleton.</p>
                <p>It is <b>Saturday</b>!</p>';
                break;
    } //end of switch($today)
?>

    <div id="wrapper">
        <!-- <div id="hero">
            <img src="images/yawenExplore.png" alt="Yawen exploring the dungeons with friends">
        </div> end of hero -->

        <main>
            <h1>Daily Website Page Using a Switch</h1>
            <?php
                echo $weekday_header;
            ?>

            <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">

            <?php echo $content; ?>
        </main>

        <aside>
            <h3>View Other Architects Albums</h3>
            <ul>
                <li><a href="daily.php?today=Sunday">Sunday</a></li>
                <li><a href="daily.php?today=Monday">Monday</a></li>
                <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
                <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
                <li><a href="daily.php?today=Thursday">Thursday</a></li>
                <li><a href="daily.php?today=Friday">Friday</a></li>
                <li><a href="daily.php?today=Saturday">Saturday</a></li>
            </ul>
        </aside>
    </div> <!-- end of wrapper -->

<?php include('./includes/footer.php');