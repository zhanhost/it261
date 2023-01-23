<?php 
//array list of wines
//knock it back, olga, we love you

echo '<h2>This will be my wine list</h2>';

$wines = array(
    'Cabernet',
    'Merlot',
    'Syrah',
    'Malbec',
    'Red Blend'
);

// echo $wines; <== WILL NOT WORK
// because array to strings will cause an error
// use a foreach loop instead

echo '<ul>';
foreach($wines as $key) {
    echo '<li> '.$key.'</li>';
}
echo '</ul>';

echo '<h2>Movies and Shows list which will have both a key and a value</h2>';

$shows = [
    'Hulu' => 'Hannibal',
    'Hulu' => 'Steven Universe',
    'Hulu' => 'Killing Eve',
    'Hulu' => 'Rick and Morty',
    'Netflix' => 'Castlevania',
    'Netflix' => 'Gilmore Girls',
    'Movie' => 'Fight Club'
];

echo '<ul>';
foreach($shows as $key => $value) {
    echo '<li> <b>'.$key.'</b>: '.$value.'</li>';
}
echo '</ul>';

echo '<h2>Navigation, which will have both a key and a value</h2>';

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

echo '<ul>';
foreach($nav as $key => $value) {
    echo '<li><a href=" '.$key.' "> '.$value.' </a></li>';
}
echo '</ul>';


?>