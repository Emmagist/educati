<?php

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<li class='text-center alert alert-danger'  role='alert' style='list-style: none;' id='error'>".$error."</li>";
        }
        
    }

?>

<script>


    setTimeout(function(){
        $("#error").fadeOut();
    }, 4000);



</script>