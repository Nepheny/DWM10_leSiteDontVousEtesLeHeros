<?php
    include('models/questions.mdl.php');
?>
<?php
    if(!isset($_GET['question']) && !isset($_SESSION['question'])) {
        include('views/templates/character.tmpl.php');
    } elseif(!isset($_SESSION['question']) && isset($_GET['question'])) {
        $_SESSION['question'] = array();
        $questionId = $_GET['question'];
        $_SESSION['question'][] = $questionId;
        $currentQuestion = $questions[$questionId];
    } else {
        $_SESSION['question'][] = $_GET['question'];
        $questionId = end($_SESSION['question']);
        $currentQuestion = $questions[$questionId];
    }
?>
<?php if(isset($questionId)): ?>
    <section>
        <h2>Question</h2>
        <div>
            <p><?=$currentQuestion['question'] ?></p>
            <ul>
            <?php foreach($currentQuestion['answers'] as $answer): ?>
                <li><a href="?question=<?= $answer['action'] ?>"><?= $answer['answer'] ?></a></li>
            <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif ?>
