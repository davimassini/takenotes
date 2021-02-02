<?php
/**
 * planne - teste de conhecimento
 *
 * author: davi massini
 *
 * @package planne
 */

 include "connectMySQL.php";
?>

<!doctype html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <title>takeNotes - Home</title>
    </head>
    <body>
        <div class="headerTitle pad-10">
            <h1>takeNotes</h1>
        </div>

        <div class="lineBefore"></div>

        <div class="notesArea">
            <?php 
                $i					= 0;
                $selectNotesQuery   = "SELECT * FROM notes ORDER BY lastUpdate DESC";
                $resultNotesQuery   = $conn->query($selectNotesQuery);
                $arrayNotesQuery	= array();

                while($rowNotesQuery = $resultNotesQuery->fetch_assoc()){
                    $arrayNotesQuery[$i] = $rowNotesQuery;

                    $dateFormat  = date_create($arrayNotesQuery[$i]["dataNote"]);
                    $updateFormat  = date_create($arrayNotesQuery[$i]["lastUpdate"]);

                    echo "<div class='", $arrayNotesQuery[$i]["idNote"], " noteDesign'>
                            <div class='insideNote pad-10'>
                                <div class='titleNote'>
                                    <p>", $arrayNotesQuery[$i]["titleNote"], "</p>
                                </div>
                
                                <div class='contentNote'>
                                    <p>", $arrayNotesQuery[$i]["resumeNote"], "</p>
                                </div>
                
                                <div class='dataNote'>
                                    <p>Editado em ", date_format($updateFormat, 'd/m/Y'), "</p>
                                    <p>Criado em ", date_format($dateFormat, 'd/m/Y'), "</p>
                                </div>
                            </div>
                          </div>";
                }
                $resultNotesQuery -> free_result();
                $i++;
            ?>
        </div>

        <div class="addNew addNote">
            <img src="assets/img/plus.svg"/>
            <p>Nova nota</p>
        </div>

        <?php
            $i					= 0;
            $selectNotesQuery = "SELECT * FROM notes";
            $resultNotesQuery = $conn->query($selectNotesQuery);
            $arrayNotesQuery	= array();

            while($rowNotesQuery = $resultNotesQuery->fetch_assoc()){
                $arrayNotesQuery[$i] = $rowNotesQuery;

                echo "<div class='", $arrayNotesQuery[$i]["idNote"], "Open overNote'>
                        <div class='openNote'>
                            <div class='titleHeader pad-10'>
                                <img class='",$arrayNotesQuery[$i]["idNote"],"Close closeNote' src='assets/img/back.svg'>
                                <h1>Editar nota</h1>
                                <img class='",$arrayNotesQuery[$i]["idNote"], "Remove removeNote' src='assets/img/trash.svg'>
                            </div>

                            <div class='lineBefore'></div>
                
                            <div class='noteInside pad-10'>
                                <div class='noteTitle' contentEditable='true'>
                                    <p>", $arrayNotesQuery[$i]["titleNote"], "</p>
                                </div>
                    
                                <div class='noteContent' contentEditable='true'>
                                    ", $arrayNotesQuery[$i]["contentNote"], "
                                </div>
                            </div>
                        </div>
                      </div>";
            }
            $resultNotesQuery -> free_result();
            $i++;
        ?>

            <div class="createNote overNote">
                <div class="openNote">
                    <div class='titleHeader pad-10'>
                        <img class='closeCreate closeNote' src='assets/img/back.svg'>
                        <h1>Criar nota</h1>
                    </div>

                    <div class='lineBefore'></div>

                    <div class="noteInside pad-10">
                        <div id="testeParag" class="noteTitle" contentEditable="true">
                            <p>Título da Nota</p>
                        </div>
            
                        <div class="noteContent" contentEditable="true">
                            <p>Escreva aqui o conteúdo da nota...</p>
                        </div>
                    </div>

                    <div class="createNoteAdd addNote">
                        <img src="assets/img/plus.svg"/>
                        <p>Nova nota</p>
                    </div>
                </div>
            </div>

        <?php
            echo "<script>";

            $i					= 0;
            $selectNotesQuery = "SELECT * FROM notes";
            $resultNotesQuery = $conn->query($selectNotesQuery);
            $arrayNotesQuery	= array();

            while($rowNotesQuery = $resultNotesQuery->fetch_assoc()){
                $arrayNotesQuery[$i] = $rowNotesQuery;

                echo "
                    $('.",$arrayNotesQuery[$i]["idNote"],"').click(function(){
                        $('.",$arrayNotesQuery[$i]["idNote"],"Open').show();
                    });

                    
                    $('.",$arrayNotesQuery[$i]["idNote"],"Close').click(function(){
                        location.reload();
                    });

                    $('.",$arrayNotesQuery[$i]["idNote"],"Open > .openNote > .noteInside > .noteTitle').keyup(function() {
                        var idQuery = '",$arrayNotesQuery[$i]["idNote"],"';
                        var titleQuery = $('.",$arrayNotesQuery[$i]["idNote"],"Open > .openNote > .noteInside > .noteTitle > p').text();
                        var resumeQuery = $('.",$arrayNotesQuery[$i]["idNote"],"Open > .openNote > .noteInside > .noteContent > p').text().substr(0,40);
                        var noteQuery = $('.",$arrayNotesQuery[$i]["idNote"],"Open > .openNote > .noteInside > .noteContent').html();

                        $.ajax({
                            url: 'actionFile.php',
                            type: 'POST',
                            data: {
                                idQuery: idQuery,
                                titleQuery: titleQuery,
                                resumeQuery: resumeQuery,
                                noteQuery: noteQuery
                            },
                            success: function(result){
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                            }
                        });
                    });
                    
                    $('.",$arrayNotesQuery[$i]["idNote"],"Open > .openNote > .noteInside > .noteContent').keyup(function() {
                        var idQuery = '",$arrayNotesQuery[$i]["idNote"],"';
                        var titleQuery = $('.",$arrayNotesQuery[$i]["idNote"],"Open > .openNote > .noteInside > .noteTitle > p').text();
                        var resumeQuery = $('.",$arrayNotesQuery[$i]["idNote"],"Open > .openNote > .noteInside > .noteContent > p').text().substr(0,40);
                        var noteQuery = $('.",$arrayNotesQuery[$i]["idNote"],"Open > .openNote > .noteInside > .noteContent').html();

                        $.ajax({
                            url: 'actionFile.php',
                            type: 'POST',
                            data: {
                                idQuery: idQuery,
                                titleQuery: titleQuery,
                                resumeQuery: resumeQuery,
                                noteQuery: noteQuery
                            },
                            success: function(result){
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                            }
                        });
                    });
                    
                    $('.",$arrayNotesQuery[$i]["idNote"],"Remove').click(function() {
                        var idRemoveQuery = '",$arrayNotesQuery[$i]["idNote"],"';

                        $.ajax({
                            url: 'actionFile.php',
                            type: 'POST',
                            data: {
                                idRemoveQuery: idRemoveQuery
                            },
                            success: function(result){
                                location.reload();
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                            }
                        });
                    });";
                    
            }
            $resultNotesQuery -> free_result();
            $i++;

            echo "</script>";

        ?>

        <script>
            $('.addNew').click(function(){
                $('.createNote').show();
            });
            
            $(".closeCreate").click(function(){
                $('.createNote').hide();
            });

            $('#testeParag').keydown(function(e) {
                if($('#testeParag > p').text().length === 29 && e.keyCode != 8) {
                    e.preventDefault();
                }
            });

            $(".createNoteAdd").click(function(){
                var $noteTitle = $(".createNote > .openNote > .noteInside > .noteTitle > p").text();
                var $resumeContent = $(".createNote > .openNote > .noteInside > .noteContent > p").text().substr(0,40);
                var $noteContent = $(".createNote > .openNote > .noteInside > .noteContent").html();

                $.ajax({
                    url: 'actionFile.php',
                    type: 'POST',
                    data: {
                        titleNote: $noteTitle,
                        contentNote: $noteContent,
                        resumeNote: $resumeContent
                    },
                    success: function(result){
                        location.reload();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                    }
                });
            });
        </script>
    </body>