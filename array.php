<?php
$names = [
    "Amel",
    "Hanna",
    "Mejrima",
    "Selma"
];

// echo $names;

// get thorough info about this array
echo "<pre>";
var_dump($names);
echo "</pre>";

// find out the number of array elements
$num = sizeof($names);
echo "<p>Number of array elements is $num.</p>";

// want to access individual array element:
echo $names[0] . "<br>";
echo $names[1] . "<br>";
echo $names[2] . "<br>";
echo $names[3] . "<br>";

// find out what is the index of last array element
$lastIndex = sizeof($names) - 1;

echo "Last array element: $names[$lastIndex]";

//Example:
// print every array element of the array $movies:
$movies = [
    "The Irishman (2018)",
    "The Good House (2017)",
    "The War with Grandpa (2017)",
    "Candy Store (2017)",
    "The Wizard of Lies (2016)",
    "Hands of Stone (2016)",
    "Dirty Grandpa (2016)",
    "The Comedian (2016)",
    "I Am JFK Jr. (2016)",
    "Heist (2015)",
    "Ellis (2015)",
    "The Intern (2015)",
    "Joy (2015)",
    "The Bag Man (2014)",
    "The Man Who Saved the World (2014)",
    "The Big Wedding (2013)",
    "Killing Season (2013)",
    "Last Vegas (2013)",
    "The Family (2013)",
    "Grudge Match (2013)",
    "Silver Linings Playbook (2012)",
    "Freelancers (2012)",
    "Being Flynn (2012)",
    "Red Lights (2012)",
    "Corman's World: Exploits of a Hollywood Rebel (2011)",
    "Limitless (2011)",
    "Killer Elite (2011)",
    "The Ages of Love (2011)",
    "New Year's Eve (2011)",
    "Machete (2010)",
    "Stone (2010)",
    "Little Fockers (2010)",
    "Everybody's Fine (2009)",
    "Righteous Kill (2008)",
    "What Just Happened? (2008)",
    "Stardust (2007)",
    "Arthur and the Invisibles (2006)",
    "The Good Shepherd (2006)",
    "Hide and Seek (2005)",
    "Meet the Fockers (2004)",
    "The Bridge of San Luis Rey (2004)",
    "Shark Tale (2004) stars as Don Lino (voice)",
    "Godsend (2004)",
    "Showtime (2002)",
    "City by the Sea (2002)",
    "Analyze That (2002)",
    "The Score (2001)",
    "15 Minutes (2001)",
    "Meet the Parents (2000)",
    "Men of Honor (2000)",
    "The Adventures of Rocky & Bullwinkle (2000)",
    "Flawless (1999)",
    "Analyze This (1999)",
    "Ronin (1998)",
    "Great Expectations (1998)",
    "Jackie Brown (1997)",
    "Wag the Dog (1997)",
    "Cop Land (1997)",
    "Marvin's Room (1996)",
    "Sleepers (1996)",
    "The Fan (1996)",
    "Cent et une nuits de Simon Cinema, Les (1995)",
    "Casino (1995)",
    "Heat (1995)",
    "Frankenstein (1994)",
    "This Boy's Life (1993)",
    "A Bronx Tale (1993)",
    "Mad Dog and Glory (1993)",
    "Mistress (1992)",
    "Night and the City (1992)",
    "The Godfather Trilogy: 1901-1980 (1992)",
    "Cape Fear (1991)",
    "Backdraft (1991)",
    "Guilty by Suspicion (1991)",
    "Awakenings (1990)",
    "Goodfellas (1990)",
    "Stanley & Iris (1990)",
    "Jacknife (1989)",
    "We're No Angels (1989)",
    "Midnight Run (1988)",
    "The Untouchables (1987)",
    "Angel Heart (1987)",
    "The Mission (1986)",
    "Brazil (1985)",
    "Falling in Love (1984)",
    "Once Upon a Time in America (1984)",
    "The King of Comedy (1983)",
    "True Confessions (1981)",
    "Raging Bull (1980)",
    "The Deer Hunter (1978)",
    "New York, New York (1977)",
    "1900 (1976) aka Novecento (Italy)",
    "The Last Tycoon (1976)",
    "Taxi Driver (1976)",
    "The Godfather: Part II (1974)",
    "Bang the Drum Slowly (1973)",
    "Mean Streets (1973)",
    "Born to Win (1971)",
    "The Gang That Couldn't Shoot Straight (1971)",
    "Jennifer on My Mind (1971)",
    "Hi, Mom! (1970)",
    "Bloody Mama (1970)",
    "Sam's Song (1969)",
    "The Wedding Party (1969)",
    "Greetings (1968)",
    "Trois chambres a Manhattan"
];


// Associateive array
$person = [
    "first-name" => "Andy",
    "last-name" => "Smith",
    "student" => true,
    "age" => 20,
    "telephone" => [
        "home" => "613-222-3333",
        "cell" => "613-444-5555"
    ]
];
echo $person["age"];

echo $person["telephone"]["home"];



// example
// print every array element of the array $bmw:
$bmw = [
   "BMW class 300", 
   "BMW class 500", 
   "BMW class 700"
]; 

// print every array element of the array $vw:
$vw = [
   "VW Polo", 
   "VW Golf", 
   "VW Passat"
]; 

// print every array element of the array $honda:
$honda = [
   "Honda Fit", 
   "Honda Civic", 
   "Honda Accord"
]; 

// multidimensional array $cars:
// print every array element of the array $cars:
$cars = [
   $bmw, 
   $vw, 
   $honda
];

//echo "<pre>";
//var_dump($cars);
//echo "</pre>";

echo "<p>My choice: $cars[2][2]</p>";

?>