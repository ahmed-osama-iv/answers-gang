<html lang="en">
<head>
    <style>
        .gang:hover{
            cursor: pointer;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@3.0.4/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="css/questions.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/write.css">
    <title>Answers' Gang | Questions</title>
</head>
<body>

<div class="container">
    <div class="text-container ">
        <span>Top Questions</span>
    </div>
    <div class="br"></div>
    <div class="br"></div>

    <div class="questions">

        <div class="question">
            <a href="write.html" ><div class="contet-question">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores earum cumque atque, recusandae repudiandae voluptas aliquam officia quibusdam aliquid possimus enim quod eligendi hic ex, architecto explicabo commodi repellendus voluptates.</div>
                <div class="vote">
                    <a onclick="M.toast({html: 'Vote Up'})" class="btn purple darken-4 "><i class="far fa-thumbs-up"></i></a>
                    <a onclick="M.toast({html: 'Vote Down'})" class="btn purple darken-4 "><i class="far fa-thumbs-down"></i></a>
                    <span class="answer">
               <a href="#modal1" class="btn  purple darken-4 modal-trigger">Answer!</a>
              </span>
                </div>
            </a>
        </div>

        <div class="br black"></div>
        <div class="question">
            <a href="write.html" ><div class="contet-question">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores earum cumque atque, recusandae repudiandae voluptas aliquam officia quibusdam aliquid possimus enim quod eligendi hic ex, architecto explicabo commodi repellendus voluptates.</div>
                <div class="vote">
                    <a onclick="M.toast({html: 'Vote Up'})" class="btn purple darken-4 ">
                        <i class="fas fa-thumbs-up"></i></a>
                    <a onclick="M.toast({html: 'Vote Down'})" class="btn purple darken-4 "><i class="fas fa-thumbs-down"></i></a>
                    <span class="answer">
                 <a href="#modal1" class="btn  purple darken-4 modal-trigger">Answer!</a>
                </span>
                </div>
            </a>
        </div>
        <div class="br black"></div>
        <a  href="#modal2" class=" ask btn purple darken-4 modal-trigger">Ask Question now</a>
    </div>

</div>



<div id="modal1" class="modal">
    <div class="modal-content">
        <h2 style="text-align: center">You can give your own answer</h2>
        <div class="container">
            <div class="question">
                <a href="write.html" ><div class="contet-question">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores earum cumque atque, recusandae repudiandae voluptas aliquam officia quibusdam aliquid possimus enim quod eligendi hic ex, architecto explicabo commodi repellendus voluptates.</div>
                    <div class="vote">
                        <a onclick="M.toast({html: 'Vote Up'})" class="btn purple darken-4 "><i class="far fa-thumbs-up"></i></a>
                        <a onclick="M.toast({html: 'Vote Down'})" class="btn purple darken-4 "><i class="far fa-thumbs-down"></i></a>

                    </div>
                </a>
            </div>
            <textarea id="froala-editor" ></textarea>
            <div class="hamada"></div>
            <div class="answer">
                <a href="#" class="btn right purple darken-4">Answer!</a>
            </div>

        </div>
    </div>

</div>

<div id="modal2" class="modal">
    <div class="modal-content">
        <h2 style="text-align: center">You can post your Question here</h2>
        <div class="container">

            <textarea id="froala-editor">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>
            <div class="hamada"></div>
            <div class="answer">
                <a href="#" class="btn right purple darken-4">Answer!</a>
            </div>

        </div>
    </div>

</div>




<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@3.0.4/js/froala_editor.pkgd.min.js'></script>
<script>
    new FroalaEditor('textarea#froala-editor')
</script>

<script src="js/vue.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
    M.toast({html: "You Are welcome my friend . Now you are Answer Gang's member , Gang will serve Gang will be of service"})
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
    $(document).ready(function(){
        $('.modal').modal();
    });



</script>

</body>
</html>
