<?php
// Define the questions and answers
$questions = [
    'What services do you offer?' => 'We offer services of Wedding, and Debut Party, you can book different packages for Wedding, and Debut',
    'How can i avail your services?' => 'Simply open the site, go to services, then click Book-Services button to avail our services.',
    'Do I need to pay when booking or after the event?' => 'Our team prefer to get the payment after event, because it is not a small amount that is easy to pay online.',
    'How will i know if my booking is approved or not?' => 'We will send you an e-mail and contact your provided mobile number to notify you if your booking has been approved or cancelled within 24hours. ',
    'Do I need to pay extra for transportation fee or is it included on the package?' => 'Yes, you need to pay extra for our transportation depending on your location, It is not included in the Package. We provide for our own transportation only if you are on Laguna Area.',
    'Question 6 GWENNNNNNNN' => 'GWAPPINGGSS',
    'Question 7' => 'Answer 7',
    
];

// Check if a question is selected
if (isset($_POST['question'])) {
    $selectedQuestion = $_POST['question'];

    // Retrieve the corresponding answer based on the selected question
    $answer = isset($questions[$selectedQuestion]) ? $questions[$selectedQuestion] : 'Sorry, I cannot answer that question.';
    $displayAnswer = true;
}

// Handle the back button click
if (isset($_POST['back'])) {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chatbot</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f8f8;
        }

        #chatbox {
            width: 38%;
            margin: 20px auto;
            padding: 10px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .message {
            margin-bottom: 15px;
            font-weight: bold;
            background-color: #0084ff;
            color: #fff;
            padding: 20px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            font-size: 1em;
        }

        .question-btn {
            display: block;
            width: 100%;
            padding: 5px 10px;
            margin-bottom: 5px;
            background-color: #f1f1f1;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .answer-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .answer-bubble {
            background-color: #0084ff;
            color: #fff;
            padding: 8px 12px;
            border-radius: 20px;
            max-width: 250px;
            word-wrap: break-word;
        }

        .answer-timestamp {
            font-size: 12px;
            color: #999;
            margin-top: 3px;
            text-align: right;
        }

        .back-btn {
            display: inline-block;
            padding: 5px 10px;
            background-color: #0084ff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
        }

        .back-btn:hover {
            background-color: #0072e3;
        }
    </style>
</head>
<body>
    <div id="chatbox">
        <div class="message">Chatbot</div>
        <?php if (isset($displayAnswer)): ?>
            <div class="answer-container">
                <div class="answer-bubble"><?= $answer ?></div>
                <div class="answer-timestamp"><?= date('H:i') ?></</div>
            </div>
        <?php endif; ?>
        <?php foreach ($questions as $question => $answer): ?>
            <form method="POST">
                <button class="question-btn" name="question" value="<?= $question ?>"><?= $question ?></button>
            </form>
        <?php endforeach; ?>
        <div class="answer-container">
            <a href="index.html" class="back-btn">Back</a>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
