<?php 
$db = mysqli_connect("localhost", "root", "chemistry1", "project1");
$result = mysqli_query($db, "SELECT * FROM images ORDER BY RAND() DESC LIMIT 10");

$row = mysqli_fetch_array($result);


$sqlupdate = "SELECT `travel_experience`, `teaaching_experience`, `learning_experience` FROM `text_body`";
$results=mysqli_query($db, $sqlupdate);
$rows=$results->fetch_assoc();
?>

<html>
    <head>
           
            <link href="https://fonts.googleapis.com/css?family=Caveat|Pangolin|Shadows+Into+Light" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/project.css">
            <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
            

    </head>

    <body class="body2">
        <div class="container">
                        <div class="dp"><img src="<?php echo $row['image']; ?>" alt=""></div>
            
                        <div class="para2">
                        <h3>Favour Ambrose-Hart</h3></div>

                        <div class = "desc">
                        <h2 class = "desc-h2">I &nbsp;&nbsp;<span class= "typed-desc"></h2></span> 
                        </div>               
                    
            <div class="row">
            
                     <div class="para3 col-4">
                         <span style="cursor:pointer;" data-toggle="popover"  tabindex="0" data-trigger="focus" title="I Travel" 
                         data-content="<?php  echo $rows["travel_experience"]; ?>">Traveller</span></div>
                    
                     <div class="para4 col-4"><span style="cursor:pointer" tabindex="0" data-trigger="focus" data-toggle="popover" title="I Teach" 
                        data-content= "<?php  echo $rows["teaaching_experience"]; ?>">Teacher</span></div>
            
                     <div class="para5 col-4"><span style="cursor:pointer" tabindex="0" data-trigger="focus" data-toggle="popover" title="I am Learning!" 
                        data-content="<?php  echo $rows["learning_experience"]; ?>">Tech Newbie</span></div>
                  
            </div>
        </div>
         
         <!-- <hr> -->
         <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
         <script src="bootstrap.bundle.min.js"></script>

         <!-- <script src="js/popper.min.js"></script> -->
         
         <script src="vendors/typed/lib/typed.min.js"></script>

         
         
         <script>
            $(document).ready(function(){
                $('[data-toggle="popover"]').popover();  

                $('.popover-dismiss').popover({
                    trigger: 'focus'
                }); 
            });
</script>

<script>
///
var options = {
    strings: [
        "am learning to build <span class=\"yellow\">responsive</span> website^1500",
        "could go into building <span class=\"yellow\">responsive</span> applications too ^1500",
        "always <span class=\"yellow\">find</span> answers to problems^1500",
        "'ll tell you more if <span class=\"yellow\">you click</span> the words below^1500",
        "should add  an emoji but I haven't figured it out... yet"
        
        
    ],
    typeSpeed: 100,
    smartBackspace: true,
    loop:'infinite',
}
var typed = new Typed(".typed-desc", options);
        </script>
<!-- <script src="js/main.js"></script> -->

        
    </body>
</html>