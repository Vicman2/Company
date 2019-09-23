<!DOCTYPE Html>
<html>
    <head>
        <title> This is my php Demo for Genesys Tech hub </title>
    </head>

    <body>
        <h1 style="text-align:center;"> My PHP Demo </h1>
        <?php
            $currentYear = date("Y"); // This holdes the current year
            $currentMonth = date("M"); // This holds the current month
            $currentDay = date("j");  // This holds the current day
            $currentTime= date("g:i:s a"); // This holds the current time

            echo" We are in the year $currentYear, in the month $currentMonth, of which the day is $currentDay <br />";
            echo"The time is $currentTime;"
        ?>

        <h2> This is for Looping </h2>
        <?php
            $k = 10;
            for($i=0; $i<=$k; $i++){
               echo str_repeat("*", $i)."<br />";
            }
        ?>

        <h2> This is  a looping demo </h2>
        <?php
            $p = 10;
            for($i = 1; $i<=$p; $i++){
                if(($i % 2 ) == 0){
                    echo "$i is an even number<br />";
                }else{
                    echo "$i is an odd number <br />";
                }
            }
        ?>

        <?php
        $authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens", "Milton", "Orwell" );
        $books = array( 
              array(    "title" =>  "The Hobbit",    "authorId" =>  2,    "pubYear" =>  1937  ), 
              array(    "title" =>  "The Grapes of Wrath",    "authorId" =>  0,    "pubYear" =>  1939  ),
              array(    "title" =>  "A Tale of Two Cities",    "authorId" =>  3,    "pubYear" =>  1859  ),
              array(    "title" =>  "Paradise Lost",    "authorId" =>  4,    "pubYear" =>  1667  ),
              array(    "title" =>  "Animal Farm",    "authorId" =>  5,    "pubYear" =>  1945  ),
              array(    "title" =>  "The Trial",    "authorId" =>  1,   "pubYear" =>  1925  ),
                 ); 
        foreach($books as &$book){
            $book["authorName"] = $authors[$book["authorId"]];
        }
        echo "<pre>";
        print_r($books);
        echo "</pre>";
        ?>


        <h2> Please fill in the form below </h2>

        <form method="post" action="reform.php" />
            <div style="margin: 50px">
                <label for="name"> Name </label>
                <input type="text" name="applicant_name" id="name" />
            </div>

             <div style="margin: 50px">
                <label for="phone_No"> Phone Number</label>
                <input type="number" name="phone_NO" id="phone_NO" />
            </div>

             <div style="margin:50px">
                <label for="email_address"> Name </label>
                <input type="text" name="email_address" id="email_address" />
            </div>
            
            <div style="margin:50px">
                <label for="maleGender"> Are you a male ? </label>
                <input type="radio" name="gender" id="maleGender" value="M" />
                <label for="femaleGender"> ... or female </label>
                <input type="radio" name="gender" id="femaleGender" value="F" />
            </div>

            <div style="margin:50px">
                <label for="newsletter"> Do you want to recieve our newsletter ? </label>
                <input type="checkbox" name="newsletter" id="newletter" value="Yes" />

            </div>

             <div style="margin:50px">
                <label for="comments"> Any comments? </label><br />
                <textarea name="comments" id="comments" rows="4" cols="50"></textarea>
             </div>

              <div style="margin:50px">
                <input type="submit" name="submitButton" id="submitButton" value="Send Details" />
              </div>
        </form>

        <?php
            function checkLongestWord($LongestWord){
                $words= explode(" ", $LongestWord);
                $numberOfWords = count($words);
                $longWord = $words[0];
                for($i=0; $i < $numberOfWords; $i++){
                    if(strlen($words[$i]) >strlen($longWord)){
                        $longWord = $words[$i];
                    }
                }
                echo $longWord;
            }

            checkLongestWord("The law is the best unizik  best student");
        ?>
    </body>
</html>