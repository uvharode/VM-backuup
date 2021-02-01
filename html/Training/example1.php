<html>
<head>
<title>
My First PHP page
</title>
</head>
<body>
    
    <h1>
        <?php 
        echo "hello world from html and php";
        echo 'This','string','was','made','with multiple parameters';
        echo 'This'.'string'.'was'.'made'.'with concatination.';
       echo "    ";
        $fname = 'Urvashi';
        $lname = 'Harode';
        
        echo '$fname $lname'; //for string
        echo "$fname $lname ";//for value
        
        //if not for value dont use  double quotes"", use single quotes because of performance will go down

        echo $fname.' '.$lname;//for concatination

        print(" Hello world from print"); /*for multiLine comment */
        print " print() also works without parentheses.";

        /* COMMENTS 
        // - for single line comment
        # - for Shell style comment
        */






        ?>
    </h1>
</body>
</html>