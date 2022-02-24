<?php
session_start();
include('functions.php');
check_session_id();
$pdo = connect_to_db();

$sql = 'SELECT * FROM studyselfnote ORDER BY id ASC';

$stmt = $pdo->prepare($sql);

try {
    $status = $stmt->execute();
} catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$output = "";

foreach ($result as $record) {
    $output .= "
    
    <div class='four wide column'>
    <div class='doubling grid'>
    <div class='ui card notecontents'>
  <a class='image' href= 'note.php?id={$record["id"]}'>
    <img class='ui medium image' src=notehome.jpeg>
  </a>
  <div class='content'>
    <a class='header' href= 'note.php?id={$record["id"]}'>{$record["notename"]}</a>
    <div class='right floated meta'>
      <a href='delete.php?id={$record["id"]}' onclick=hoge();>delete</a>
    </div>
  </div>
</div>
</div>
</div>
  ";
}

$idname = $stmt->fetchAll(PDO::FETCH_ASSOC);
$idnamearray = "";
foreach ($idname as $record) {
    $idnamearray .= "
    <tr>{$record['id']}</tr>
    ";
}



?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css" />
    <title>Studyself</title>
    <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="dist/semantic.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>
    <header class="topNavigation">
        <p>Studyself</p>
        <div class="ui grid">
            <div class="four column row">
                <div class='right floated column'> <a href="logout.php">ログアウト</a></div>
            </div>
        </div>
    </header>
    <nav>
        <div class="big ui fluid four item menu">
            <a class="item" href="#">ホーム</a>
            <a class="item" href="#">ノート作成</a>
            <a class="item" href="#">問題集</a>
            <a class="item" href="#">教える</a>
        </div>
    </nav>
    <dialog>
        <form method="post" action="notestyle.php" class=dialog>
            <p class=dialog_title>新規ノート作成</p>
            <p class=dialog_notename> ノートの名前:</p>
            <input type=text name="notename">
            <p class=dialog_selection>用途:</p>
            <select name="usepurpose">
                <option value="memorize">暗記系</option>
                <option value="understand">理解系</option>
                <option value="other">その他</option>
            </select><br>
            <button type="submit" class=dialog_note_create>作成</button>
        </form>
        <button id="dialogClose">☓</button>
    </dialog>
    <div>
        <div class="ui left basic segment">
            <div id="noteCreate">
                <div class="huge ui teal labeled icon button">
                    <i class="add icon"></i>
                    new
                </div>
            </div>
        </div>
    </div>
    <h2 class="ui header"></h2>
    <div class='ui three column doubling stackable grid container'>
     <div class="four wide column">
        <div class="ui grid center aligned">
            <?= $output ?>
        </div>
    </div>
</div>
    <?= $idnamearray ?>
    <dialog id=deleteDialog>

        <p id=deleteDialog></p>
    </dialog>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        //dialog
        const showDialog = document.querySelector('dialog');
        const noteCreate = document.getElementById('noteCreate');
        const dialogClose = document.getElementById('dialogClose');
        noteCreate.addEventListener('click', () => {
            console.log("aaa");
            showDialog.showModal();
        }, false);
        dialogClose.addEventListener('click', function() {
            showDialog.close();
        }, false);

        // function getFunc(id) {

        //     console.log(id);

        // }
        //deletedilog
        // function getFunc(id) {
        //     console.log(id);
        //     return;

        // }
        // let deleteidname = getFunc();
        // console.log(deleteidname);
        // const deleteShowDialog = document.getElementById('deleteDialog');
        // const noteDelete = document.querySelectorAll('delete');
        // const deleteDialogClose = document.getElementById('deletedialogClose');
        // noteDelete.addEventListener('click', () => {
        //     console.log("delete");
        //     deleteShowDialog.showModal();
        // }, false);
        // deleteDialogClose.addEventListener('click', function() {
        //     deleteShowDialog.close();
        // }, false);
        //引数に指定したclassの値をもつ要素をすべて取得

        // noteDelete.addEventListener('click', {
        //     value: `${button.value}`,
        //     handleEvent: onClickButton
        // });
        // const deleteShowDialog = document.getElementById('deleteDialog');
        // const noteDelete = document.querySelectorAll('delete');
        // const deleteDialogClose = document.getElementById('deletedialogClose');
        // noteDelete.addEventListener('click',{
        //     value: `${button.value}`,
        //     handleEvent: onClickButton

        // }, false);
        // deleteDialogClose.addEventListener('click', function() {
        //     deleteShowDialog.close();
        // }, false);
        // const deleteShowDialog = document.getElementById('deleteDialog');
        // const noteDelete = document.getElementById('delete');
        // const deleteDialogClose = document.getElementById('deletedialogClose');
        // noteDelete.addEventListener('click', () => {
        //     console.log("delete");
        //     deleteShowDialog.showModal();
        // }, false);
        // deleteDialogClose.addEventListener('click', function() {
        //     deleteShowDialog.close();
        // }, false);
        // function hoge() {
        //     console.log("hogehoge");
        // }

        // function OnLinkClick() {
        //     const deleteShowDialog = document.getElementById("deleteDialog");
        //     const links = [...document.querySelectorAll(".delete")];
        //     console.log(links);
        //     for (let i = 0; i < links.length; i++) {
        //         links[i].addEventListener('click', () => {
        //             console.log(links[i]);
        //             const buttonCount = links[i];
        //             const deleteButtonCount = JSON.stringify(buttonCount)
        //             console.log(deleteButtonCount);
        //             document.getElementById('deleteDialog').innerHTML = `<form method="post" action="delete.php" class=dialog> <p class = dialog_title > 本当に消去しますか？ </p> <div><input id = deleteNoteIdname type = "hidden"name = "id"value = ${deleteButtonCount}></div> <button type = "submit"class = dialog_note_create > はい </button></form><button id="deletedialogClose"> いいえ</button>`
        //             deleteShowDialog.showModal();
        //             //close
        //             const deleteDialogClose = document.getElementById('deletedialogClose');
        //             deleteDialogClose.addEventListener('click', function() {
        //                 deleteShowDialog.close();
        //             }, false);
        //         }, false);
        //     }
        // }

        // const deleteShowDialog = document.getElementById('deleteDialog');
        // const links = [...document.querySelectorAll(".delete")];
        // console.log(links);
        // for (let i = 0; i < links.length; i++) {
        //     links[i].addEventListener('click', () => {
        //         console.log(links[i]);
        //         const buttonCount = links[i];
        //         const deleteButtonCount = JSON.stringify(buttonCount)
        //         console.log(deleteButtonCount);
        //         document.getElementById('deleteDialog').innerHTML = `<form method="post" action="delete.php" class=dialog> <p class = dialog_title > 本当に消去しますか？ </p> <div><input id = deleteNoteIdname type = "hidden"name = "id"value = ${deleteButtonCount}></div> <button type = "submit"class = dialog_note_create > はい </button></form><button id="deletedialogClose"> いいえ</button>`
        //         deleteShowDialog.showModal();
        //         //close
        //         const deleteDialogClose = document.getElementById('deletedialogClose');
        //         deleteDialogClose.addEventListener('click', function() {
        //             deleteShowDialog.close();
        //         }, false);
        //     }, false);
        // }


        // const deleteShowDialog = document.getElementById('deleteDialog');

        // const menus = document.getElementsByClassName('delete');
        // const links = [...document.querySelectorAll(".delete")];
        // console.log(links);
        // for (let i = 0; i < links.length; i++) {
        //     links[i].addEventListener('click', () => {
        //         console.log(links[i]);
        //         const deleteButtonCount = links[i];
        //         let buttonCount = Array.from(links[i]);
        //         console.log(buttonCount);
        //         document.getElementById('deleteDialog').innerHTML = `<form method="post" action="delete.php" class=dialog> <p class = dialog_title > 本当に消去しますか？ </p> <div><input id = deleteNoteIdname type = "hidden"name = "id"value = ${deleteButtonCount}></div> <button type = "submit"class = dialog_note_create > はい </button></form><button id="deletedialogClose"> いいえ</button>`
        //         deleteShowDialog.showModal();
        //         //close
        //         const deleteDialogClose = document.getElementById('deletedialogClose');
        //         deleteDialogClose.addEventListener('click', function() {
        //             deleteShowDialog.close();
        //         }, false);
        //     }, false);
        // }
    </script>
</body>

</html>