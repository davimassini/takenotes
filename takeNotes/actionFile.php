<?php
/**
 * planne - teste de conhecimento
 *
 * author: davi massini
 *
 * @package planne
 */

 include "connectMySQL.php";


   if(isset($_POST['titleNote'])) {
      $titleNote     = $_POST['titleNote'];
      $contentNote   = $_POST['contentNote'];
      $resumeNote    = $_POST['resumeNote'];

      if($titleNote == ""){
         $titleNote = "Sem título";
      }else {
         $titleNote = $titleNote;
      }

      $insertQuery   = mysqli_query($conn, "INSERT INTO `notes`(`idNote`, `titleNote`, `contentNote`, `resumeNote`, `dataNote`, `lastUpdate`)
                                             VALUES (randomWord(),'$titleNote','$contentNote', '$resumeNote',now(), now())");
   }else if(isset($_POST['idQuery'])) {
      $idQuery       = $_POST['idQuery'];
      $titleQuery    = $_POST['titleQuery'];
      $resumeQuery   = $_POST['resumeQuery'];
      $noteQuery     = $_POST['noteQuery'];

      if($titleQuery == ""){
         $titleQuery = "Sem título";
      }else {
         $titleQuery = $titleQuery;
      }

      $updateQuery   = mysqli_query($conn, "UPDATE `notes` SET `titleNote`='$titleQuery',`contentNote`='$noteQuery',`resumeNote`='$resumeQuery',`lastUpdate`= NOW()
                                             WHERE idNote = '$idQuery'");
   }else if(isset($_POST['idRemoveQuery'])) {
      $idRemoveQuery = $_POST['idRemoveQuery'];
      
      $deteleBt    = "DELETE FROM notes WHERE idNote = '$idRemoveQuery'";
      $deleteQuery = $conn->query($deteleBt);
   }else {}